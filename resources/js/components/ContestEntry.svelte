<main>
    <div class="col-md-6 offset-md-3" style="font-family:Fira Sans', sans-serif;">
        <h3 class="text-center">Enter your email to win!</h3>
        <form>
            <div class="input-group">
                <input style="height:36px; font-size:18px; margin-right:0; border-right:none;" class="form-control" placeholder="your email"
                       v-validate="'required|email'" v-model="email" name="contest-entry"
                       type="email"
                       :class="{'form-control': true, 'is-danger': errors.has('contest-entry') }"
                       aria-describedby="basic-addon2" required>
                    <span class="input-group-btn">
                        <button :class="{'btn': true, 'btn-primary': true, 'is-danger': errors.has('contest-entry') }"
                                @click.prevent="signup"
                                type="submit"
                                role="button"
                                :disabled="email == '' || errors.has('contest-entry')"
                                style="height:36px; margin-left:-1px; border-left:none; border-top-left-radius:0; border-bottom-left-radius:0; font-size:16px;">
                            Enter
                        </button>
                    </span>

            </div>
            <div style="min-height:24px;">
                <span v-show="errors.has('contest-entry')" class="help is-danger">{{ errors.first('contest-entry') }}</span>
            </div>
        </form>
    </div>
</main>
<style>
    body {font-family:'Fira Sans', sans-serif;}
</style>
<script>
        let state = { 
            name: 'contest-entry',
            props: ['g_id'],
            email: '',
            message: '',
            giveaway_id: this.g_id
        }
                
       function signup() {
                this.validator.validateAll({
                        email: this.email
                    })
                    .then(result => {
                axios.post(`/api/contest-entries`, {
                        email: this.email,
                        giveaway_id: this.giveaway_id
                    }).then(result => {
                        this.message = result.data.message
                    })
                    .then(result => {
                swal({
                        title: 'Thanks for entering the contest!',
                        text: this.message,
                        type: 'success',
                        timer: 5000
                        });
            return result
        })
        .catch(error => {
                this.error = true
            swal({
                title: 'Something\'s not right',
                text: 'Something went wrong.',
                type: 'danger',
                timer: 5000
            });
            return Promise.reject(error)
        })
        })
    }
</script>