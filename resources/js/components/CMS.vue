<template>
    <div class="row">
        <div class="container">
            <button @click.prevent="toggleIndex" id="create" class="btn btn-create">
                <span v-if="index">Create</span>
                <span v-if="! index">Index</span>
            </button>
            <div v-show="! index">
                <button @click.prevent="createNewContentItem" class="btn btn-primary" :disabled="! newContentItem.title">
                    New
                </button>
            </div>
            <table v-show="index" class="table table-striped table-inverse">
                <thead class="thead-inverse">
                <tr>
                    <th>Title</th>
                    <th>Edit</th>
                </tr>
                </thead>
                <tbody class="resource-list">
                <tr v-for="content in contents" v-if="user.id == content.user_id || isDev" class="table-hover">
                    <td><strong>{{ content.title }}</strong></td>
                    <td><button @click.prevent="(edit(content.id))"role="button" class="btn btn-warning">Edit</button></td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="container">
            <hr>
            <form class="form-horizontal new-content" v-if="! index" role="form">
                <div class="form-group">
                    <div v-show="newContentItem.contentItemId" class="col-md-2 hidden-sm hidden-xs">
                        <button :class="{'btn': true, 'btn-primary': true, 'is-danger': newContentItem.saveError }" @click.prevent="update" :disabled="newContentItem.saved">
                            <span v-if="newContentItem.saveBusy">
                                <i class="fa fa-btn fa-spinner fa-spin"></i>Updating
                             </span>
                            <span v-else-if="newContentItem.saved">
                                <i class="fa fa-btn fa-check-circle"></i>Saved!
                             </span>
                        <span v-else-if="newContentItem.saved == false">
                                <i class="fa fa-btn fa-check-circle"></i>Update
                             </span>
                            <span v-else>
                                <i class="fa fa-btn fa-check-circle"></i>Updated
                            </span>

                        </button>
                    </div>
                    <div v-show="! newContentItem.contentItemId" class="col-md-2 hidden-sm hidden-xs">
                        <button :class="{'btn': true, 'btn-primary': true, 'is-danger': newContentItem.saveError }" @click.prevent="save" :disabled="newContentItem.saved || saveBusy">
                            <span v-if="newContentItem.saveBusy">
                                <i class="fa fa-btn fa-spinner fa-spin"></i>Saving
                             </span>
                            <span v-else-if="newContentItem.contentItemId !== null">
                                <i class="fa fa-btn fa-check-circle"></i>Saved!
                             </span>
                            <span v-else>
                                <i class="fa fa-btn fa-check-circle"></i>Save
                            </span>
                        </button>
                    </div>
                    <div v-if="isDev" class="col-md-2 hidden-sm hidden-xs">
                        <button :class="{'btn': true, 'btn-warning': true, 'is-success': newContentItem.published }"  @click.prevent="publish" :disabled="newContentItem.published || ! newContentItem.saved">
                        <span v-if="newContentItem.publishBusy">
                                <i class="fa fa-btn fa-spinner fa-spin"></i>Publishing
                             </span>
                             <span class="is-success" v-else-if="newContentItem.published !== null">
                                <i class="fa fa-btn btn-success fa-newspaper-o"></i>Published!
                             </span>
                            <span v-else>
                                <i class="fa fa-btn fa-newspaper-o"></i>Publish
                            </span>
                        </button>
                    </div>
                    <div class="col-md-2 hidden-sm hidden-xs">
                        <button v-if="isDev" @click.prevent="unpublish" :class="{'btn': true, 'btn-warning': true, 'hidden': ! newContentItem.published }">
                            Unpublish
                        </button>
                    </div>
                    <div class="col-md-2 hidden-sm hidden-xs">
                        <button @click.prevent="leeroyjenkins" :class="{'btn': true, 'btn-danger': true, 'hidden': newContentItem.published }" :disabled="! newContentItem.contentItemId">
                            Delete
                        </button>
                    </div>
                </div>
                <!-- Header Photo Button -->
                <div class="form-group">
                    <div class="container">
                        <label type="button" class="btn btn-primary btn-upload" :disabled="newContentItem.busy">
                            <span>Select Header Photo</span>
                            <input v-validate="'required|mimes:jpg,jpeg,png,gif'" ref="header_photo" type="file" class="form-control" name="header_photo" @change="update_header">
                        </label>
                        <span v-show="! newContentItem.header_photo" class="help is-danger">This is required</span><br>
                        <span v-show="errors.has('header_photo')" class="help is-danger">{{ errors.first('header_photo') }}</span>
                        <div role="img" class="header-photo-preview"
                             :style="previewStyle">

                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <label for="title"><p>Title:</p></label>
                        <input v-validate="'required|min:3|max:140'" id="title" name="title" v-model="newContentItem.title"
                               :class="{'form-control': true, 'input': true, 'is-danger': errors.has('title') }" type="text" placeholder="ContentItem Title"
                               style="width:100%">
                        <span v-show="errors.has('title')" class="help is-danger">{{ errors.first('title') }}</span>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <p>Body:</p>
                        <trumbowyg id="trumbowyg" :config="trumbowygConfig" name="body" v-validate="'required|min:16'" v-model="newContentItem.body"></trumbowyg>
                        <span v-show="errors.has('body')" class="help is-danger">{{ errors.first('body') }}</span>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <input-tag class="input-tag" name="tags" v-model="newContentItem.tags" :tags="newContentItem.tags" placeholder="add tag"></input-tag>
                        <label>Spaces are allowed! Use ENTER/RETURN key, or type a comma to separate tags.</label>
                    </div>
                </div>
                <div class="form-group">
                    <div v-show="newContentItem.contentItemId" class="col-md-2 col-sm-12">
                        <button :class="{'btn': true, 'btn-primary': true, 'is-danger': newContentItem.saveError }" @click.prevent="update" :disabled="newContentItem.saved">
                            <span v-if="newContentItem.saveBusy">
                                <i class="fa fa-btn fa-spinner fa-spin"></i>Updating
                             </span>
                            <span v-else-if="newContentItem.saved">
                                <i class="fa fa-btn fa-check-circle"></i>Saved!
                             </span>
                        <span v-else-if="newContentItem.saved == false">
                                <i class="fa fa-btn fa-check-circle"></i>Update
                             </span>
                            <span v-else>
                                <i class="fa fa-btn fa-check-circle"></i>Updated
                            </span>

                        </button>
                    </div>
                    <div v-show="! newContentItem.contentItemId" class="col-md-2 col-sm-12">
                        <button :class="{'btn': true, 'btn-primary': true, 'is-danger': newContentItem.saveError }" @click.prevent="save" :disabled="newContentItem.saved || saveBusy">
                            <span v-if="newContentItem.saveBusy">
                                <i class="fa fa-btn fa-spinner fa-spin"></i>Saving
                             </span>
                            <span v-else-if="newContentItem.contentItemId !== null">
                                <i class="fa fa-btn fa-check-circle"></i>Saved!
                             </span>
                            <span v-else>
                                <i class="fa fa-btn fa-check-circle"></i>Save
                            </span>
                        </button>
                    </div>
                    <div v-if="isDev" class="col-md-2 col-sm-12">
                        <button :class="{'btn': true, 'btn-warning': true, 'is-success': newContentItem.published }"  @click.prevent="publish" :disabled="newContentItem.published || ! newContentItem.saved">
                        <span v-if="newContentItem.publishBusy">
                                <i class="fa fa-btn fa-spinner fa-spin"></i>Publishing
                             </span>
                             <span class="is-success" v-else-if="newContentItem.published !== null">
                                <i class="fa fa-btn btn-success fa-newspaper-o"></i>Published!
                             </span>
                            <span v-else>
                                <i class="fa fa-btn fa-newspaper-o"></i>Publish
                            </span>
                        </button>
                    </div>
                    <div class="col-md-2 col-sm-12">
                        <button v-if="isDev" @click.prevent="unpublish" :class="{'btn': true, 'btn-warning': true, 'hidden': ! newContentItem.published }">
                            Unpublish
                        </button>
                    </div>
                    <div class="col-md-2 col-sm-12">
                        <button @click.prevent="leeroyjenkins" :class="{'btn': true, 'btn-danger': true, 'hidden': newContentItem.published }" :disabled="! newContentItem.contentItemId">
                            Delete
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</template>

<script>
    "use strict"
    // Import this component
    import trumbowyg from 'vue-trumbowyg';

    // Import editor css
    import 'trumbowyg/dist/ui/trumbowyg.css';

    import VeeValidate from 'vee-validate';
    Vue.use(VeeValidate);
    export default {
        props: ['user','dev', 'contentType'],
        validator: null,
        created() {
            this.isADev()
        },
        mounted() {
            this.getIndex()
            this.confirmNavAway()
        },
        components: {
            trumbowyg
        },
        data() {
            return {
                index: true,
                contents: [],
                isDev: this.isADev(),
                newContentItem: new SparkForm ({
                    header_photo:'',
                    title: '',
                    slug: '',
                    body: '',
                    tags: [],
                    link: '',
                    contentItemId: null,
                    image_id: null,
                    saveBusy: false,
                    saveError: false,
                    saved: true,
                    serverErrors: null,
                    publishBusy: false,
                    published: null,
                    publicationId: null,
                    errors: null
                }),
                trumbowygConfig: {
                    id: 'trumbowyg',
                    autogrow: true,
                    svgPath: '/images/icons.svg',
                    btnsDef: {
                        // Customizables dropdowns
                        image: {
                            dropdown: ['insertImage', 'upload'],
                            ico: 'insertImage'
                        }
                    },
                    btns: [
                        ['viewHTML'],
                        ['formatting'],
                        ['strong', 'em', 'underline'],
                        ['link'],
                        ['image'],
                        ['justifyLeft', 'justifyCenter', 'justifyRight', 'justifyFull'],
                        ['unorderedList', 'orderedList'],
                        ['horizontalRule'],
                        ['removeformat']
                    ],
                    plugins: {
                        upload: {
                            serverPath: '/cms/images',
                            fileFieldName: 'image',
                            urlPropertyName: 'large',
                            headers: {
                                'X-CSRF-TOKEN': token
                            },
                            xhrFields: {}
                        },
                    }
                }
            }
        },
        watch: {
            'newContentItem.header_photo': function (val, oldVal) {
                this.newContentItem.saved = false
            },
            title(value) {
                this.validator.validate('title', value);
            },
            body(value) {
                this.validator.validate('body', value);
            },

            /**
             * Watch the title and create slug.
             */
            'newContentItem.title': function (val, oldVal) {
                this.newContentItem.serverErrors = null
                if (this.newContentItem.slug == '' ||
                        this.newContentItem.slug == this.makeSlug(oldVal)
                ) {
                    this.newContentItem.slug = this.makeSlug(val)
                }
                this.newContentItem.saved = false
            },
            'newContentItem.body': function (val, oldVal) {
                this.newContentItem.saved = false
            },
            'newContentItem.tags': function (val, oldVal) {
                this.newContentItem.saved = false
            }
        },
        methods: {
            isADev() {
                if(this.dev == 'yes')
                {
                    return true
                }
                return false
            },

            makeSlug(inputString) {
                return inputString.toLowerCase().trim().replace(/[\s\W-]+/g, '-')
            },

            getIndex() {
                axios.get('/api/contents', {})
                        .then(result  => {
                    this.contents = result.data.data
                return this.contents
            })
            .catch(error => {
                    return Promise.reject(error)
                })
            },
            toggleIndex() {
                if(this.index == true) {
                    return this.index = false
                }
                this.getIndex()
                return this.index = true
            },
            confirmNavAway() {
                window.onbeforeunload = function() {
                    return 'You may lose unsaved changes!'
                }
            },
            save() {
                this.newContentItem.saveError = false
                this.newContentItem.saveBusy = true
                this.validator.validateAll({
                    title: this.newContentItem.title,
                    body: this.newContentItem.body,
                    slug: this.newContentItem.slug
                }).then((result) => {
                    axios.post('/api/' + this.contentType + '/', {
                            title: this.newContentItem.title,
                            user_id: Spark.state.user.id,
                            author: Spark.state.user.name,
                            header_photo: this.newContentItem.header_photo,
                            image_id: this.newContentItem.image_id,
                            slug:  this.newContentItem.slug,
                            body:  this.newContentItem.body,
                            tags: this.newContentItem.tags
                        })
                        .then(result  => {
                    this.newContentItem.saveBusy = false
                this.newContentItem.saved= true
                this.newContentItem.contentItemId = result.data.id
                swal({
                    title: 'SUCCESS!',
                    text: 'The content was saved.',
                    type: 'success',
                    timer: 2000
                });
                return result
            })
            .catch(error => {
                    this.newContentItem.saveError = true
                this.newContentItem.saveBusy = false
                var saveErrors = error.response.data.errors
                var thisError = error.response.data.errors[Object.keys(saveErrors) [0]]
                swal({
                    title: 'SAVE FAILED!',
                    text: thisError,
                    type: 'error',
                    timer: 3000,
                });
                return Promise.reject(error)
            })
            })
            .catch(error => {
                    this.newContentItem.saveBusy = false
                this.newContentItem.saveError = true
                var saveErrors = error.response.data.errors
                var thisError = error.response.data.errors[Object.keys(saveErrors) [0]]
                this.errors = Promise.reject(error)
                swal({
                    title: 'SAVE FAILED!',
                    text: thisError,
                    type: 'error',
                    timer: 3000,
                });
                return Promise.reject(error)
            })
            },

            publish() {
                this.newContentItem.publishBusy = true
                if (this.newContentItem.contentItemId === null) {
                    this.newContentItem.publishBusy = false
                    this.save()
                    return
                }
                axios.content('/api/publications', {
                            type:    this.contentType,
                            content_id: this.newContentItem.contentItemId
                        })
                        .then(result  => {
                    this.newContentItem.publishBusy = false
                this.newContentItem.publicationId = result.data.id
                return result
            })
            .catch(error => {
                    this.newContentItem.publishBusy = false
                return Promise.reject(error)
            });
                this.newContentItem.publishBusy = false
                this.newContentItem.published = true

            },

            unpublish() {
                const contentItemId = this.newContentItem.contentItemId
                axios.delete('/api/publications/'
                                + this.newContentItem.publicationId, {})
                        .then(result  => {
                    this.newContentItem.publicationId = null
                this.newContentItem.publishBusy = false
                this.newContentItem.published = null
                this.checkPublication(contentItemId)
                return result
            })
            .catch(error => {
                    this.newContentItem.publishBusy = false
                return Promise.reject(error)
            });
            },

            checkPublication(id){
                axios.get('/api' + this.contentType + '/publications/' + id, {})
                        .then(result  => {
                    this.newContentItem.publicationId = result.data.id
                if (this.newContentItem.publicationId === undefined) {
                    this.newContentItem.publicationId = null
                    this.newContentItem.published = null
                } else {
                    this.newContentItem.published = true
                    this.newContentItem.publishBusy = false
                }
                return result.data
            })
            .catch(error => {
                    return Promise.reject(error)
                })
            },

            update() {
                this.newContentItem.saveError = false
                this.newContentItem.saveBusy = true
                this.validator.validateAll({
                    title: this.newContentItem.title,
                    body: this.newContentItem.body
                }).then((result) => {
                    axios.put('/api' + this.contentType  + '/'+ this.newContentItem.contentItemId, {
                            title: this.newContentItem.title,
                            header_photo: this.newContentItem.header_photo,
                            user_id: Spark.state.user.id,
                            author: Spark.state.user.name,
                            image_id: this.newContentItem.image_id,
                            body:  this.newContentItem.body,
                            tags: this.newContentItem.tags
                        })
                        .then(result  => {
                    this.newContentItem.saveBusy = false
                this.newContentItem.saved = true
                swal({
                    title: 'SUCCESS!',
                    text: 'The content was updated.',
                    type: 'success',
                    timer: 2000
                });
                return result
            })
            .catch(error => {
                    this.newContentItem.saveError = true
                this.newContentItem.saveBusy = false
                var saveErrors = error.response.data.errors
                var thisError = error.response.data.errors[Object.keys(saveErrors) [0]]
                swal({
                    title: 'UPDATE FAILED!',
                    text: thisError,
                    type: 'error',
                    timer: 3000,
                });
                return Promise.reject(error)
            })
            })
            .catch(error => {
                    this.newContentItem.saveBusy = false
                this.newContentItem.saveError = true
                return Promise.reject(error)
            })
            },

            leeroyjenkins() {
                if(confirm("Permanently destroy this content?")) {
                    axios.delete('/api' + this.contentType + '/' + this.newContentItem.contentItemId, {})
                            .then(result  => {
                        this.clear()
                })
                .catch(error => {
                        return Promise.reject(error)
                    });
                }
            },
            /**
             * Update the showcase photo.
             */
            update_header(e) {
                e.preventDefault();

                if ( ! this.$refs.header_photo.files.length) {
                    return;
                }

                var self = this;

                this.newContentItem.startProcessing();

                // We need to gather a fresh FormData instance with the profile photo appended to
                // the data so we can POST it up to the server. This will allow us to do async
                // uploads of the profile photos. We will update the user after this action.
                axios.content(this.urlForUpdate, this.gatherFormData())
                        .then(result  => {
                    this.newContentItem.header_photo = result.data.large
                this.newContentItem.thumbnail = result.data.thumbnail
                this.newContentItem.image_id = result.data.image_id
                self.newContentItem.finishProcessing();
            },
                (error) => {
                    self.newContentItem.setErrors(error.response.data.errors);
                }
            );
            },
            /**
             * Gather the form data for the photo upload.
             */
            gatherFormData() {
                const data = new FormData();

                data.append('header_photo', this.$refs.header_photo.files[0]);

                return data;
            },
            createNewContentItem() {
                if (!this.newContentItem.contentItemId) {
                    if (confirm('Abandon this content and start over?')) {
                        this.clear()
                    }
                } else {
                    this.clear()
                }
            },
            clear() {
                this.newContentItem.reset()
            },
            edit(id){
                this.saveBusy = true
                this.index = false
                this.newContentItem.contentItemId = id
                this.getTags(this.newContentItem.contentItemId)
                axios.get('/api' + this.contentType + '/' + id , {})
                        .then(result => {
                    this.newContentItem.title = result.data.title;
                this.newContentItem.header_photo = result.data.header_photo
                this.newContentItem.slug = result.data.slug;
                this.newContentItem.body = result.data.body;
                this.newContentItem.contentItemId = result.data.id;
                this.checkPublication(id)
                this.saveBusy = false
                this.newContentItem.saved = true

                return result.data
            })
            .catch(error => {
                    return Promise.reject(error)
                })
            },
            getTags(id) {
                axios.get('/cms/' + this.contentType + '/' + id + '/tags', {})
                        .then(result => {
                    this.newContentItem.tags = result.data;
                return result.data.tags
            })
            .catch(error => {
                    return Promise.reject(error)
                })
            }
        },

        created() {
            this.validator = new VeeValidate.Validator({
                title: 'required|min:2',
                body: 'required|min:40',
                slug: 'required'
            });
        },
        computed: {

            /**
             * Get the URL for updating the team photo.
             */
            urlForUpdate() {
                return '/api/photo';
            },
            /**
             * Calculate the style attribute for the photo preview.
             */
            previewStyle() {
                return 'background-image: url(${this.newContentItem.header_photo})';
            }
        },
    }
</script>
<style>
    .help.is-danger {
        color : #ef6f6c;
    }
    .btn.is-danger {
        border-color: #ef6f6c;
        outline: 0;
        box-shadow: inset 0 0 2px red, 0 0 4px red;
    }
    .btn.btn-warning.is-success {
        border-color: #0A8A4A;
        outline: 0;
        box-shadow: inset 0 0 2px #0A8A4A, 0 0 4px #0A8A4A;
        background-color:transparent;
        color: #0A8A4A;
    }
    .btn-warning.disabled:hover, .btn-warning[disabled]:hover,
    fieldset[disabled] .btn:hover,
    .btn.disabled:focus, .btn[disabled]:focus,
    fieldset[disabled] .btn:focus {
        background-color:transparent;
        border:none;
        outline: 0;
    }
    input.is-danger, textarea.is-danger {
        border-color: #ef6f6c;
        outline: 0;
        box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(239, 111, 108, 0.6);
    }
    .ql-container.ql-snow {
        border-bottom-left-radius: 4px;
        border-bottom-right-radius: 4px;
    }
    .ql-toolbar.ql-snow {
        border-top-left-radius: 4px;
        border-top-right-radius: 4px;
    }
    @media (max-width: 991px) {
        .new-content .btn
        {
            width:100%;
            padding:1.34em;
            margin: 0.66em 0;
        }
    }
    .content-index {
        position:relative;
        display:block
    }
    .btn-warning.disabled:hover,
    .btn-warning[disabled]:hover,
    fieldset[disabled] .btn:hover,
    .btn.disabled:focus,
    .btn[disabled]:focus,
    fieldset[disabled] .btn:focus {
        background-color:transparent !important;
    }
</style>
