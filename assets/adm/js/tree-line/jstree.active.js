
(function ($) {
 "use strict";



        $('#using_json').jstree({
            'core' : {
            'data' : [
                'Empty Folder',
                {
                    'text': 'Resources',
                    'state': {
                        'opened': false
                    },
                    'children': [
                        {
                            'text': 'css',
                            'children': [
                                {
                                    'text': 'animate.css', 'icon': 'none'
                                },
                                {
                                    'text': 'bootstrap.css', 'icon': 'none'
                                },
                                {
                                    'text': 'main.css', 'icon': 'none'
                                },
                                {
                                    'text': 'style.css', 'icon': 'none'
                                }
                            ],
                            'state': {
                                'opened': false
                            }
                        },
                        {
                            'text': 'js',
                            'children': [
                                {
                                    'text': 'bootstrap.js', 'icon': 'none'
                                },
                                {
                                    'text': 'inspinia.min.js', 'icon': 'none'
                                },
                                {
                                    'text': 'jquery.min.js', 'icon': 'none'
                                },
                                {
                                    'text': 'jsTree.min.js', 'icon': 'none'
                                },
                                {
                                    'text': 'custom.min.js', 'icon': 'none'
                                }
                            ],
                            'state': {
                                'opened': false
                            }
                        },
                        {
                            'text': 'html',
                            'children': [
                                {
                                    'text': 'layout.html', 'icon': 'none'
                                },
                                {
                                    'text': 'navigation.html', 'icon': 'none'
                                },
                                {
                                    'text': 'navbar.html', 'icon': 'none'
                                },
                                {
                                    'text': 'footer.html', 'icon': 'none'
                                },
                                {
                                    'text': 'sidebar.html', 'icon': 'none'
                                }
                            ],
                            'state': {
                                'opened': false
                            }
                        }
                    ]
                },
                'Fonts',
                'Images',
                'Scripts',
                'Templates',
            ]
        } });


})(jQuery);
