/**
 * icon style.
 */


@font-face {
	font-family: 'FontAwesome';
	src: url('../fonts/fontawesome-webfont.eot?v=4.0.3');
	src: url('../fonts/fontawesome-webfont.eot?#iefix&v=4.0.3') format('embedded-opentype'), url('../fonts/fontawesome-webfont.woff?v=4.0.3') format('woff'), url('../fonts/fontawesome-webfont.ttf?v=4.0.3') format('truetype'), url('../fonts/fontawesome-webfont.svg?v=4.0.3#fontawesomeregular') format('svg');
	font-weight: normal;
	font-style: normal;
}

<?php print $selector_prefix; ?>span.tm-follow-link-wrapper {
	display: block;
	float: left;
	margin-left: 7px;
}

<?php print $selector_prefix; ?>span.tm-follow-link-wrapper:first-child {
	margin-left: 0;
}

<?php print $selector_prefix; ?> a.tm-follow-link {
	display: inline-block;
}

<?php print $selector_prefix; ?> a.tm-follow-link:before {
	display: inline-block;
	font-family: FontAwesome;
	font-style: normal;
	font-weight: normal;
	line-height: 1;
	-webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;
	text-decoration: none;
}

<?php print $selector_prefix; ?> a.tm-follow-link:hover {
	color: inherit;
}

<?php print $selector_prefix; ?> .with-label a.tm-follow-link:before{
	margin-right: 3px;
}

<?php print $selector_prefix; ?>a.tm-follow-link-dribbble:before {
	content: "\f17d";
}

<?php print $selector_prefix; ?>a.tm-follow-link-facebook:before {
	content: "\f09a";
}

<?php print $selector_prefix; ?>a.tm-follow-link-flickr:before {
	content: "\f16e";
}

<?php print $selector_prefix; ?>a.tm-follow-link-googleplus:before {
	content: "\f0d5";
}

<?php print $selector_prefix; ?>a.tm-follow-link-instagram:before {
	content: "\f16d";
}

<?php print $selector_prefix; ?>a.tm-follow-link-linkedin:before {
	content: "\f0e1";
}

<?php print $selector_prefix; ?>a.tm-follow-link-pinterest:before {
	content: "\f0d2";
}

<?php print $selector_prefix; ?>a.tm-follow-link-tumblr:before {
	content: "\f173";
}

<?php print $selector_prefix; ?>a.tm-follow-link-twitter:before {
	content: "\f099";
}

<?php print $selector_prefix; ?>a.tm-follow-link-vimeo:before {
	content: "\f194";
}

<?php print $selector_prefix; ?>a.tm-follow-link-youtube:before {
	content: "\f167";
}

<?php print $selector_prefix; ?>a.tm-follow-link-xing:before {
	content: "\f168";
}

<?php print $selector_prefix; ?>a.tm-follow-link-this-site:before {
	content: "\f09e";
}

<?php print $selector_prefix; ?>a.tm-follow-link-newsletter:before {
	content: "\f0e0";
}

<?php if (!empty($css_overrides)): ?>
/* Custom overrides for this style. */
<?php print $css_overrides; ?>
/* End custom overrides. */
<?php endif; ?>
