function includeJsFiles(files) {
    files.map((jsFile) => {
        const js = document.createElement("script");
    
        js.type = "text/javascript";
        js.src = jsFile;
    
        document.body.appendChild(js);
    });
}

includeJsFiles([
    '/webroot/js/admin/users.js',
]);