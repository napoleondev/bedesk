<?php

return [
    //branding
    ['name' => 'branding.site_name', 'value' => 'BeDesk'],

    //cache
    ['name' => 'cache.report_minutes', 'value' => 60],

    //other
    ['name' => 'site.force_https', 'value' => 0],

    //menus
    ['name' => 'menus', 'value' => json_encode([
        ['name' => 'Agent Mailbox', 'position' => 'agent-mailbox', 'items' => [
            ['type' => 'route', 'order' => 1, 'label' => 'Tickets', 'action' => 'mailbox'],
            ['type' => 'route', 'order' => 2, 'label' => 'Help Center', 'action' => 'help-center/manage'],
            ['type' => 'route', 'order' => 2, 'label' => 'Admin Area', 'action' => 'admin'],
        ]],
        ['name' => 'Header Menu', 'position' => 'header', 'items' => [
            ['type' => 'route', 'condition' => 'auth', 'label' => 'My Tickets', 'action' => '/help-center/tickets'],
        ]],
    ])],

    //uploads
    ['name' => 'uploads.max_size', 'value' => 52428800],
    ['name' => 'uploads.available_space', 'value' => 104857600],
    ['name' => 'uploads.blocked_extensions', 'value' => json_encode(['exe', 'application/x-msdownload', 'x-dosexec'])],

    //tickets
    ['name' => 'replies.send_email', 'value' => 0],
    ['name' => 'tickets.create_from_emails', 'value' => 0],
    ['name' => 'tickets.send_ticket_created_notification', 'value' => 0],
    ['name' => 'replies.after_reply_action', 'value' => 'next_active_ticket'],

    //mail
    ['name' => 'mail.handler', 'value' => 'null', 'private' => 1],
    ['name' => 'mail.webhook_secret_key', 'value' => str_random(30), 'private' => 1],
    ['name' => 'mail.use_default_templates', 'value' => 0],
    ['name' => 'mail.store_unmatched_emails', 'value' => 0],

    //real time
    ['name' => 'realtime.enable', 'value' => 0],
    ['name' => 'realtime.pusher_key', 'value' => null],

    //envato
    ['name' => 'envato.filter_search', 'value' => 0],

    //help center
    ['name' => 'hc_home.template', 'value' => 'articleGrid'],
    ['name' => 'articles.default_order', 'value' => 'created_at|desc'],
    ['name' => 'hc.search_page_limit', 'value' => 20],
    ['name' => 'hc.search_page.body_limit', 'value' => 300],
    ['name' => 'hc_home.children_per_category', 'value' => 6],
    ['name' => 'hc_home.articles_per_category', 'value' => 5],
    ['name' => 'hc_home.hide_small_categories', 'value' => 0],
    ['name' => 'hc.home.title', 'value' => 'How can we help you?'],
    ['name' => 'hc.home.subtitle', 'value' => 'Ask Questions. Browse Articles. Find Answers.'],
    ['name' => 'hc.home.search-placeholder', 'value' => 'Enter your question or keyword here'],
    ['name' => 'hc.home.background', 'value' => 'client/assets/images/pattern.svg'],

    //new ticket page
    ['name' => 'hc.new-ticket.title', 'value' => 'Submit a Ticket'],
    ['name' => 'hc.new-ticket.category_label', 'value' => 'Select the item you need help with'],
    ['name' => 'hc.new-ticket.subject_label', 'value' => 'In a few words, tell us what your enquiry is about'],
    ['name' => 'hc.new-ticket.description_label', 'value' => 'Tell us more...Please be as detailed as possible.'],
    ['name' => 'hc.new-ticket.submit_button_text', 'value' => 'Submit'],
    ['name' => 'hc.new-ticket.sidebar_title', 'value' => 'Before you submit:'],
    ['name' => 'hc.new-ticket.sidebar_tips', 'value' => json_encode([
        ['title' => 'Tell us!', 'content' => 'Add as much detail as possible, including site and page name.'],
        ['title' => 'Show us!', 'content' => 'Add a screenshot or a link to a video.']
    ])],
];
