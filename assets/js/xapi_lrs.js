var lrs;

try {
    lrs = new TinCan.LRS(
        {
            endpoint: xapi_lrs.xapi_endpoint,
            username: xapi_lrs.xapi_username,
            password: xapi_lrs.xapi_password,
            allowFail: false
        }
    );
}
catch (ex) {
    console.log("Failed to setup LRS object: ", ex);
    // TODO: do something with error, can't communicate with LRS
}

if( xapi_lrs.url_iri.length == 0 ){
    console.log("Failed to send statement: Missing Verb Id");
} else {

    var verb = xapi_lrs.verb ? xapi_lrs.verb : 'read';

    var statement = new TinCan.Statement({
        "actor": {
            "mbox": "mailto:"+xapi_lrs.user_email,
            "name": xapi_lrs.user_realname,
            "objectType": "Agent"
        },
        "verb": {
            "id": xapi_lrs.url_iri,
            "display": {
                "en-US": verb
            }
        },
        "object": {
            "id": xapi_lrs.post_url,
            "definition": {
                "name": {
                    "en-US": xapi_lrs.post.post_title
                }
            },
            "objectType": "Activity"
        }
    });

    lrs.saveStatement(
        statement,
        {
            callback: function (err, xhr) {
                if (err !== null) {
                    if (xhr !== null) {
                        console.log("Failed to save statement: " + xhr.responseText + " (" + xhr.status + ")");
                        // TODO: do something with error, didn't save statement
                        return;
                    }

                    console.log("Failed to save statement: " + err);
                    // TODO: do something with error, didn't save statement
                    return;
                }

                console.log("Statement saved");
                // TOOO: do something with success (possibly ignore)
            }
        }
    );
}