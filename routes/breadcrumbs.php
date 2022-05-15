<?php

use Diglactic\Breadcrumbs\Breadcrumbs;

use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Dashboard
Breadcrumbs::for('admins.partials.dashboard', function (BreadcrumbTrail $trail) {
    $trail->push('Dashboard', route('admins.index'));
});
// Dashboard/Home
Breadcrumbs::for('admins.partials.dashboard_home', function (BreadcrumbTrail $trail) {
    $trail->parent('admins.partials.dashboard');
    $trail->push('Home', '/');
});

// Dashboard/Pages
Breadcrumbs::for('admins.pages.index', function (BreadcrumbTrail $trail) {
    $trail->parent('admins.partials.dashboard');
    $trail->push('Pages', route('admins.pages.index'));
});

// Dashboard/Categories
Breadcrumbs::for('admins.categories.index', function (BreadcrumbTrail $trail) {
    $trail->parent('admins.partials.dashboard');
    $trail->push('Categories', route('admins.categories.index'));
});

// Dashboard/Posts
Breadcrumbs::for('admins.posts.index', function (BreadcrumbTrail $trail) {
    $trail->parent('admins.partials.dashboard');
    $trail->push('Posts', route('admins.posts.index'));
});
