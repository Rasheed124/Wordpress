(function ($) {
    wp.customize.bind('ready', function () {
        // Add Location Setting
        wp.customize.create('location_setting', 'location_setting_control',  {
            label: 'Location',
            section: 'title_tagline',
            type: 'text',
            settings: {
                'default': 'Based in Nigeria, Working Worldwide'
                
            }
        });



        // Add Skills Setting
        wp.customize.create('skills_setting', 'skills_setting_control', {
            label: 'Skills',
            section: 'title_tagline',
            type: 'text',
            settings: {
                'default': 'Product Design | Creative Graphic Design | Data Analytics | Digital Marketing'
            }
        });

        // Add Social Media Setting
        wp.customize.create('social_media_setting', 'social_media_setting_control', {
            label: 'Social Media',
            section: 'title_tagline',
            type: 'text',
            settings: {
                'default': 'LinkedIn'
            }
        });

        // Add Link Setting
        wp.customize.create('link_setting', 'link_setting_control', {
            label: 'Link',
            section: 'title_tagline',
            type: 'url',
            settings: {
                'default': '#'
            }
        });

        // Add controls
        wp.customize.control.add('location_setting_control', new wp.customize.Control('location_setting', {
            label: 'Location',
            section: 'title_tagline',
            type: 'text'
        }));

        wp.customize.control.add('skills_setting_control', new wp.customize.Control('skills_setting', {
            label: 'Skills',
            section: 'title_tagline',
            type: 'text'
        }));

        wp.customize.control.add('social_media_setting_control', new wp.customize.Control('social_media_setting', {
            label: 'Social Media',
            section: 'title_tagline',
            type: 'text'
        }));

        wp.customize.control.add('link_setting_control', new wp.customize.Control('link_setting', {
            label: 'Link',
            section: 'title_tagline',
            type: 'url'
        }));
    });
})(jQuery);
