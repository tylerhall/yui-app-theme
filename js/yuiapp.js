YUI().use('node', function(Y) {
     function init() {
        Y.all('#page-width-switcher a').on('click', function(e) {
            Y.all('#page-width-switcher a.highlight').removeClass('highlight');
            e.target.addClass('highlight');
            document.body.id = e.target.get('title');
            e.halt();
        });

        Y.all('#page-layout-switcher a').on('click', function(e) {
            Y.all('#page-layout-switcher a.highlight').removeClass('highlight');
            e.target.addClass('highlight');
            doc = Y.get('body div:first');
            doc.replaceClass(doc.get('className'), e.target.get('title'));
            e.halt();
        });
     }
     Y.on("domready", init);
});
