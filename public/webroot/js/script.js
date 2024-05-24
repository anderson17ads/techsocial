function includeJsFiles(files) {
    files.map((jsFile) => {
        const js = document.createElement("script");
    
        js.type = "text/javascript";
        js.src = jsFile;
    
        document.body.appendChild(js);
    });
}

includeJsFiles([
    '/webroot/js/admin/users/list.js',
    '/webroot/js/admin/users/delete.js',
    '/webroot/js/admin/users/edit.js',
    '/webroot/js/admin/users/update.js',
    '/webroot/js/admin/users/store.js',
]);