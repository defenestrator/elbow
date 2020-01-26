    var Ziggy = {
        namedRoutes: {"login":{"uri":"login","methods":["GET","HEAD"],"domain":null},"logout":{"uri":"logout","methods":["POST"],"domain":null},"register":{"uri":"register","methods":["GET","HEAD"],"domain":null},"password.request":{"uri":"password\/reset","methods":["GET","HEAD"],"domain":null},"password.email":{"uri":"password\/email","methods":["POST"],"domain":null},"password.reset":{"uri":"password\/reset\/{token}","methods":["GET","HEAD"],"domain":null},"password.update":{"uri":"password\/reset","methods":["POST"],"domain":null},"verification.notice":{"uri":"email\/verify","methods":["GET","HEAD"],"domain":null},"verification.verify":{"uri":"email\/verify\/{id}\/{hash}","methods":["GET","HEAD"],"domain":null},"verification.resend":{"uri":"email\/resend","methods":["POST"],"domain":null},"welcome":{"uri":"\/","methods":["GET","HEAD"],"domain":null},"contact":{"uri":"contact","methods":["POST"],"domain":null},"home":{"uri":"home","methods":["GET","HEAD"],"domain":null},"seeds.index":{"uri":"seeds","methods":["GET","HEAD"],"domain":null},"cms.seeds.index":{"uri":"cms\/seeds","methods":["GET","HEAD"],"domain":null},"cms.seeds.create":{"uri":"cms\/seeds\/new","methods":["GET","HEAD"],"domain":null},"cms.seeds.show":{"uri":"cms\/seeds\/{id}","methods":["GET","HEAD"],"domain":null},"cms.seeds.update":{"uri":"cms\/seeds\/{id}","methods":["PUT"],"domain":null},"cms.seeds.destroy":{"uri":"cms\/seeds\/{id}","methods":["DELETE"],"domain":null},"cms.seed-companies.index":{"uri":"cms\/seed-companies","methods":["GET","HEAD"],"domain":null},"cms.seed-companies.create":{"uri":"cms\/seed-companies\/new","methods":["GET","HEAD"],"domain":null},"cms.seed-companies.show":{"uri":"cms\/seed-companies\/{id}","methods":["GET","HEAD"],"domain":null},"cms.seed-companies.update":{"uri":"cms\/seed-companies\/{id}","methods":["PUT"],"domain":null},"cms.seed-companies.destroy":{"uri":"cms\/seed-companies\/{id}","methods":["DELETE"],"domain":null},"cms.strains.index":{"uri":"cms\/strains","methods":["GET","HEAD"],"domain":null},"cms.strains.create":{"uri":"cms\/strains\/new","methods":["GET","HEAD"],"domain":null},"cms.strains.show":{"uri":"cms\/strains\/{id}","methods":["GET","HEAD"],"domain":null},"cms.strains.update":{"uri":"cms\/strains\/{id}","methods":["PUT"],"domain":null},"cms.strains.destroy":{"uri":"cms\/strains\/{id}","methods":["DELETE"],"domain":null}},
        baseUrl: 'http://elbow.test/',
        baseProtocol: 'http',
        baseDomain: 'elbow.test',
        basePort: false,
        defaultParameters: []
    };

    if (typeof window.Ziggy !== 'undefined') {
        for (var name in window.Ziggy.namedRoutes) {
            Ziggy.namedRoutes[name] = window.Ziggy.namedRoutes[name];
        }
    }

    export {
        Ziggy
    }
