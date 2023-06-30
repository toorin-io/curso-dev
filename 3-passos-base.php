<?php
$utm_source = isset($_GET['utm_source'])?$_GET['utm_source'] : null;
$utm_medium = isset($_GET['utm_medium'])?$_GET['utm_medium'] : null;
$utm_campaign = isset($_GET['utm_campaign'])?$_GET['utm_campaign'] : null;
$utm_term = isset($_GET['utm_term'])?$_GET['utm_term'] : null;
$utm_content = isset($_GET['utm_content'])?$_GET['utm_content'] : null;
?>
<html lang="pt-BR">
	<head>
    <meta charset="UTF-8" />
		<title>Descubra os 3 passos para ser o dev desejado pelo mercado!</title>
		<?php
			include("chunks/head/tags-head.php");

			include("chunks/head/meta.php");
		?>
		<?php

		?>

    <style>
      img.wp-smiley,
      img.emoji {
        display: inline !important;
        border: none !important;
        box-shadow: none !important;
        height: 1em !important;
        width: 1em !important;
        margin: 0 0.07em !important;
        vertical-align: -0.1em !important;
        background: none !important;
        padding: 0 !important;
      }
    </style>

		<style id="global-styles-inline-css">
      body {
        --wp--preset--color--black: #000000;
        --wp--preset--color--cyan-bluish-gray: #abb8c3;
        --wp--preset--color--white: #ffffff;
        --wp--preset--color--pale-pink: #f78da7;
        --wp--preset--color--vivid-red: #cf2e2e;
        --wp--preset--color--luminous-vivid-orange: #ff6900;
        --wp--preset--color--luminous-vivid-amber: #fcb900;
        --wp--preset--color--light-green-cyan: #7bdcb5;
        --wp--preset--color--vivid-green-cyan: #00d084;
        --wp--preset--color--pale-cyan-blue: #8ed1fc;
        --wp--preset--color--vivid-cyan-blue: #0693e3;
        --wp--preset--color--vivid-purple: #9b51e0;
        --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(
          135deg,
          rgba(6, 147, 227, 1) 0%,
          rgb(155, 81, 224) 100%
        );
        --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(
          135deg,
          rgb(122, 220, 180) 0%,
          rgb(0, 208, 130) 100%
        );
        --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(
          135deg,
          rgba(252, 185, 0, 1) 0%,
          rgba(255, 105, 0, 1) 100%
        );
        --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(
          135deg,
          rgba(255, 105, 0, 1) 0%,
          rgb(207, 46, 46) 100%
        );
        --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(
          135deg,
          rgb(238, 238, 238) 0%,
          rgb(169, 184, 195) 100%
        );
        --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(
          135deg,
          rgb(74, 234, 220) 0%,
          rgb(151, 120, 209) 20%,
          rgb(207, 42, 186) 40%,
          rgb(238, 44, 130) 60%,
          rgb(251, 105, 98) 80%,
          rgb(254, 248, 76) 100%
        );
        --wp--preset--gradient--blush-light-purple: linear-gradient(
          135deg,
          rgb(255, 206, 236) 0%,
          rgb(152, 150, 240) 100%
        );
        --wp--preset--gradient--blush-bordeaux: linear-gradient(
          135deg,
          rgb(254, 205, 165) 0%,
          rgb(254, 45, 45) 50%,
          rgb(107, 0, 62) 100%
        );
        --wp--preset--gradient--luminous-dusk: linear-gradient(
          135deg,
          rgb(255, 203, 112) 0%,
          rgb(199, 81, 192) 50%,
          rgb(65, 88, 208) 100%
        );
        --wp--preset--gradient--pale-ocean: linear-gradient(
          135deg,
          rgb(255, 245, 203) 0%,
          rgb(182, 227, 212) 50%,
          rgb(51, 167, 181) 100%
        );
        --wp--preset--gradient--electric-grass: linear-gradient(
          135deg,
          rgb(202, 248, 128) 0%,
          rgb(113, 206, 126) 100%
        );
        --wp--preset--gradient--midnight: linear-gradient(
          135deg,
          rgb(2, 3, 129) 0%,
          rgb(40, 116, 252) 100%
        );
        --wp--preset--duotone--dark-grayscale: url("#wp-duotone-dark-grayscale");
        --wp--preset--duotone--grayscale: url("#wp-duotone-grayscale");
        --wp--preset--duotone--purple-yellow: url("#wp-duotone-purple-yellow");
        --wp--preset--duotone--blue-red: url("#wp-duotone-blue-red");
        --wp--preset--duotone--midnight: url("#wp-duotone-midnight");
        --wp--preset--duotone--magenta-yellow: url("#wp-duotone-magenta-yellow");
        --wp--preset--duotone--purple-green: url("#wp-duotone-purple-green");
        --wp--preset--duotone--blue-orange: url("#wp-duotone-blue-orange");
        --wp--preset--font-size--small: 13px;
        --wp--preset--font-size--medium: 20px;
        --wp--preset--font-size--large: 36px;
        --wp--preset--font-size--x-large: 42px;
        --wp--preset--spacing--20: 0.44rem;
        --wp--preset--spacing--30: 0.67rem;
        --wp--preset--spacing--40: 1rem;
        --wp--preset--spacing--50: 1.5rem;
        --wp--preset--spacing--60: 2.25rem;
        --wp--preset--spacing--70: 3.38rem;
        --wp--preset--spacing--80: 5.06rem;
        --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
        --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
        --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
        --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1),
          6px 6px rgba(0, 0, 0, 1);
        --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
      }
      :where(.is-layout-flex) {
        gap: 0.5em;
      }
      body .is-layout-flow > .alignleft {
        float: left;
        margin-inline-start: 0;
        margin-inline-end: 2em;
      }
      body .is-layout-flow > .alignright {
        float: right;
        margin-inline-start: 2em;
        margin-inline-end: 0;
      }
      body .is-layout-flow > .aligncenter {
        margin-left: auto !important;
        margin-right: auto !important;
      }
      body .is-layout-constrained > .alignleft {
        float: left;
        margin-inline-start: 0;
        margin-inline-end: 2em;
      }
      body .is-layout-constrained > .alignright {
        float: right;
        margin-inline-start: 2em;
        margin-inline-end: 0;
      }
      body .is-layout-constrained > .aligncenter {
        margin-left: auto !important;
        margin-right: auto !important;
      }
      body
        .is-layout-constrained
        > :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
        max-width: var(--wp--style--global--content-size);
        margin-left: auto !important;
        margin-right: auto !important;
      }
      body .is-layout-constrained > .alignwide {
        max-width: var(--wp--style--global--wide-size);
      }
      body .is-layout-flex {
        display: flex;
      }
      body .is-layout-flex {
        flex-wrap: wrap;
        align-items: center;
      }
      body .is-layout-flex > * {
        margin: 0;
      }
      :where(.wp-block-columns.is-layout-flex) {
        gap: 2em;
      }
      .has-black-color {
        color: var(--wp--preset--color--black) !important;
      }
      .has-cyan-bluish-gray-color {
        color: var(--wp--preset--color--cyan-bluish-gray) !important;
      }
      .has-white-color {
        color: var(--wp--preset--color--white) !important;
      }
      .has-pale-pink-color {
        color: var(--wp--preset--color--pale-pink) !important;
      }
      .has-vivid-red-color {
        color: var(--wp--preset--color--vivid-red) !important;
      }
      .has-luminous-vivid-orange-color {
        color: var(--wp--preset--color--luminous-vivid-orange) !important;
      }
      .has-luminous-vivid-amber-color {
        color: var(--wp--preset--color--luminous-vivid-amber) !important;
      }
      .has-light-green-cyan-color {
        color: var(--wp--preset--color--light-green-cyan) !important;
      }
      .has-vivid-green-cyan-color {
        color: var(--wp--preset--color--vivid-green-cyan) !important;
      }
      .has-pale-cyan-blue-color {
        color: var(--wp--preset--color--pale-cyan-blue) !important;
      }
      .has-vivid-cyan-blue-color {
        color: var(--wp--preset--color--vivid-cyan-blue) !important;
      }
      .has-vivid-purple-color {
        color: var(--wp--preset--color--vivid-purple) !important;
      }
      .has-black-background-color {
        background-color: var(--wp--preset--color--black) !important;
      }
      .has-cyan-bluish-gray-background-color {
        background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
      }
      .has-white-background-color {
        background-color: var(--wp--preset--color--white) !important;
      }
      .has-pale-pink-background-color {
        background-color: var(--wp--preset--color--pale-pink) !important;
      }
      .has-vivid-red-background-color {
        background-color: var(--wp--preset--color--vivid-red) !important;
      }
      .has-luminous-vivid-orange-background-color {
        background-color: var(
          --wp--preset--color--luminous-vivid-orange
        ) !important;
      }
      .has-luminous-vivid-amber-background-color {
        background-color: var(
          --wp--preset--color--luminous-vivid-amber
        ) !important;
      }
      .has-light-green-cyan-background-color {
        background-color: var(--wp--preset--color--light-green-cyan) !important;
      }
      .has-vivid-green-cyan-background-color {
        background-color: var(--wp--preset--color--vivid-green-cyan) !important;
      }
      .has-pale-cyan-blue-background-color {
        background-color: var(--wp--preset--color--pale-cyan-blue) !important;
      }
      .has-vivid-cyan-blue-background-color {
        background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
      }
      .has-vivid-purple-background-color {
        background-color: var(--wp--preset--color--vivid-purple) !important;
      }
      .has-black-border-color {
        border-color: var(--wp--preset--color--black) !important;
      }
      .has-cyan-bluish-gray-border-color {
        border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
      }
      .has-white-border-color {
        border-color: var(--wp--preset--color--white) !important;
      }
      .has-pale-pink-border-color {
        border-color: var(--wp--preset--color--pale-pink) !important;
      }
      .has-vivid-red-border-color {
        border-color: var(--wp--preset--color--vivid-red) !important;
      }
      .has-luminous-vivid-orange-border-color {
        border-color: var(
          --wp--preset--color--luminous-vivid-orange
        ) !important;
      }
      .has-luminous-vivid-amber-border-color {
        border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
      }
      .has-light-green-cyan-border-color {
        border-color: var(--wp--preset--color--light-green-cyan) !important;
      }
      .has-vivid-green-cyan-border-color {
        border-color: var(--wp--preset--color--vivid-green-cyan) !important;
      }
      .has-pale-cyan-blue-border-color {
        border-color: var(--wp--preset--color--pale-cyan-blue) !important;
      }
      .has-vivid-cyan-blue-border-color {
        border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
      }
      .has-vivid-purple-border-color {
        border-color: var(--wp--preset--color--vivid-purple) !important;
      }
      .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
        background: var(
          --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple
        ) !important;
      }
      .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
        background: var(
          --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan
        ) !important;
      }
      .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
        background: var(
          --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange
        ) !important;
      }
      .has-luminous-vivid-orange-to-vivid-red-gradient-background {
        background: var(
          --wp--preset--gradient--luminous-vivid-orange-to-vivid-red
        ) !important;
      }
      .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
        background: var(
          --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray
        ) !important;
      }
      .has-cool-to-warm-spectrum-gradient-background {
        background: var(
          --wp--preset--gradient--cool-to-warm-spectrum
        ) !important;
      }
      .has-blush-light-purple-gradient-background {
        background: var(--wp--preset--gradient--blush-light-purple) !important;
      }
      .has-blush-bordeaux-gradient-background {
        background: var(--wp--preset--gradient--blush-bordeaux) !important;
      }
      .has-luminous-dusk-gradient-background {
        background: var(--wp--preset--gradient--luminous-dusk) !important;
      }
      .has-pale-ocean-gradient-background {
        background: var(--wp--preset--gradient--pale-ocean) !important;
      }
      .has-electric-grass-gradient-background {
        background: var(--wp--preset--gradient--electric-grass) !important;
      }
      .has-midnight-gradient-background {
        background: var(--wp--preset--gradient--midnight) !important;
      }
      .has-small-font-size {
        font-size: var(--wp--preset--font-size--small) !important;
      }
      .has-medium-font-size {
        font-size: var(--wp--preset--font-size--medium) !important;
      }
      .has-large-font-size {
        font-size: var(--wp--preset--font-size--large) !important;
      }
      .has-x-large-font-size {
        font-size: var(--wp--preset--font-size--x-large) !important;
      }
      .wp-block-navigation a:where(:not(.wp-element-button)) {
        color: inherit;
      }
      :where(.wp-block-columns.is-layout-flex) {
        gap: 2em;
      }
      .wp-block-pullquote {
        font-size: 1.5em;
        line-height: 1.6;
      }
    </style>
    <link
      rel="stylesheet"
      id="hello-elementor-css"
      href="https://conquistesuavaga.com/wp-content/themes/hello-elementor/style.min.css?ver=2.7.1"
      media="all"
    />
    <link
      rel="stylesheet"
      id="hello-elementor-theme-style-css"
      href="https://conquistesuavaga.com/wp-content/themes/hello-elementor/theme.min.css?ver=2.7.1"
      media="all"
    />
    <link
      rel="stylesheet"
      id="elementor-icons-css"
      href="https://conquistesuavaga.com/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css?ver=5.20.0"
      media="all"
    />
    <link
      rel="stylesheet"
      id="elementor-frontend-css"
      href="https://conquistesuavaga.com/wp-content/plugins/elementor/assets/css/frontend.min.css?ver=3.13.4"
      media="all"
    />
    <link
      rel="stylesheet"
      id="swiper-css"
      href="https://conquistesuavaga.com/wp-content/plugins/elementor/assets/lib/swiper/css/swiper.min.css?ver=5.3.6"
      media="all"
    />
    <link
      rel="stylesheet"
      id="elementor-post-5-css"
      href="https://conquistesuavaga.com/wp-content/uploads/elementor/css/post-5.css?ver=1685812728"
      media="all"
    />
    <link
      rel="stylesheet"
      id="elementor-pro-css"
      href="https://conquistesuavaga.com/wp-content/plugins/elementor-pro/assets/css/frontend.min.css?ver=3.13.2"
      media="all"
    />
    <link
      rel="stylesheet"
      id="uael-frontend-css"
      href="https://conquistesuavaga.com/wp-content/plugins/ultimate-elementor/assets/min-css/uael-frontend.min.css?ver=1.36.16"
      media="all"
    />
    <link
      rel="stylesheet"
      id="elementor-global-css"
      href="https://conquistesuavaga.com/wp-content/uploads/elementor/css/global.css?ver=1685812730"
      media="all"
    />
    <link
      rel="stylesheet"
      id="elementor-post-512-css"
      href="https://conquistesuavaga.com/wp-content/uploads/elementor/css/post-512.css?ver=1686853872"
      media="all"
    />
    <link
      rel="stylesheet"
      id="google-fonts-1-css"
      href="https://fonts.googleapis.com/css?family=Raleway%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=auto&#038;ver=6.2.2"
      media="all"
    />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <script
      src="https://conquistesuavaga.com/wp-includes/js/jquery/jquery.min.js?ver=3.6.4"
      id="jquery-core-js"
    ></script>
    <script
      src="https://conquistesuavaga.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.0"
      id="jquery-migrate-js"
    ></script>
    <script
      src="https://conquistesuavaga.com/wp-content/plugins/handl-utm-grabber/js/js.cookie.js?ver=6.2.2"
      id="js.cookie-js"
    ></script>

    <style id="wp-custom-css">
      .mauticform_wrapper {
        padding: 0px !important;
        margin: 0px !important;
      }
    </style>
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, viewport-fit=cover"
    />
  </head>
  <body
    class="page-template page-template-elementor_canvas page page-id-512 wp-custom-logo elementor-default elementor-template-canvas elementor-kit-5 elementor-page elementor-page-512"
  >
    <svg
      xmlns="http://www.w3.org/2000/svg"
      viewBox="0 0 0 0"
      width="0"
      height="0"
      focusable="false"
      role="none"
      style="
        visibility: hidden;
        position: absolute;
        left: -9999px;
        overflow: hidden;
      "
    >
      <defs>
        <filter id="wp-duotone-dark-grayscale">
          <feColorMatrix
            color-interpolation-filters="sRGB"
            type="matrix"
            values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "
          />
          <feComponentTransfer color-interpolation-filters="sRGB">
            <feFuncR type="table" tableValues="0 0.49803921568627" />
            <feFuncG type="table" tableValues="0 0.49803921568627" />
            <feFuncB type="table" tableValues="0 0.49803921568627" />
            <feFuncA type="table" tableValues="1 1" />
          </feComponentTransfer>
          <feComposite in2="SourceGraphic" operator="in" />
        </filter>
      </defs>
    </svg>
    <svg
      xmlns="http://www.w3.org/2000/svg"
      viewBox="0 0 0 0"
      width="0"
      height="0"
      focusable="false"
      role="none"
      style="
        visibility: hidden;
        position: absolute;
        left: -9999px;
        overflow: hidden;
      "
    >
      <defs>
        <filter id="wp-duotone-grayscale">
          <feColorMatrix
            color-interpolation-filters="sRGB"
            type="matrix"
            values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "
          />
          <feComponentTransfer color-interpolation-filters="sRGB">
            <feFuncR type="table" tableValues="0 1" />
            <feFuncG type="table" tableValues="0 1" />
            <feFuncB type="table" tableValues="0 1" />
            <feFuncA type="table" tableValues="1 1" />
          </feComponentTransfer>
          <feComposite in2="SourceGraphic" operator="in" />
        </filter>
      </defs>
    </svg>
    <svg
      xmlns="http://www.w3.org/2000/svg"
      viewBox="0 0 0 0"
      width="0"
      height="0"
      focusable="false"
      role="none"
      style="
        visibility: hidden;
        position: absolute;
        left: -9999px;
        overflow: hidden;
      "
    >
      <defs>
        <filter id="wp-duotone-purple-yellow">
          <feColorMatrix
            color-interpolation-filters="sRGB"
            type="matrix"
            values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "
          />
          <feComponentTransfer color-interpolation-filters="sRGB">
            <feFuncR
              type="table"
              tableValues="0.54901960784314 0.98823529411765"
            />
            <feFuncG type="table" tableValues="0 1" />
            <feFuncB
              type="table"
              tableValues="0.71764705882353 0.25490196078431"
            />
            <feFuncA type="table" tableValues="1 1" />
          </feComponentTransfer>
          <feComposite in2="SourceGraphic" operator="in" />
        </filter>
      </defs>
    </svg>
    <svg
      xmlns="http://www.w3.org/2000/svg"
      viewBox="0 0 0 0"
      width="0"
      height="0"
      focusable="false"
      role="none"
      style="
        visibility: hidden;
        position: absolute;
        left: -9999px;
        overflow: hidden;
      "
    >
      <defs>
        <filter id="wp-duotone-blue-red">
          <feColorMatrix
            color-interpolation-filters="sRGB"
            type="matrix"
            values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "
          />
          <feComponentTransfer color-interpolation-filters="sRGB">
            <feFuncR type="table" tableValues="0 1" />
            <feFuncG type="table" tableValues="0 0.27843137254902" />
            <feFuncB
              type="table"
              tableValues="0.5921568627451 0.27843137254902"
            />
            <feFuncA type="table" tableValues="1 1" />
          </feComponentTransfer>
          <feComposite in2="SourceGraphic" operator="in" />
        </filter>
      </defs>
    </svg>
    <svg
      xmlns="http://www.w3.org/2000/svg"
      viewBox="0 0 0 0"
      width="0"
      height="0"
      focusable="false"
      role="none"
      style="
        visibility: hidden;
        position: absolute;
        left: -9999px;
        overflow: hidden;
      "
    >
      <defs>
        <filter id="wp-duotone-midnight">
          <feColorMatrix
            color-interpolation-filters="sRGB"
            type="matrix"
            values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "
          />
          <feComponentTransfer color-interpolation-filters="sRGB">
            <feFuncR type="table" tableValues="0 0" />
            <feFuncG type="table" tableValues="0 0.64705882352941" />
            <feFuncB type="table" tableValues="0 1" />
            <feFuncA type="table" tableValues="1 1" />
          </feComponentTransfer>
          <feComposite in2="SourceGraphic" operator="in" />
        </filter>
      </defs>
    </svg>
    <svg
      xmlns="http://www.w3.org/2000/svg"
      viewBox="0 0 0 0"
      width="0"
      height="0"
      focusable="false"
      role="none"
      style="
        visibility: hidden;
        position: absolute;
        left: -9999px;
        overflow: hidden;
      "
    >
      <defs>
        <filter id="wp-duotone-magenta-yellow">
          <feColorMatrix
            color-interpolation-filters="sRGB"
            type="matrix"
            values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "
          />
          <feComponentTransfer color-interpolation-filters="sRGB">
            <feFuncR type="table" tableValues="0.78039215686275 1" />
            <feFuncG type="table" tableValues="0 0.94901960784314" />
            <feFuncB
              type="table"
              tableValues="0.35294117647059 0.47058823529412"
            />
            <feFuncA type="table" tableValues="1 1" />
          </feComponentTransfer>
          <feComposite in2="SourceGraphic" operator="in" />
        </filter>
      </defs>
    </svg>
    <svg
      xmlns="http://www.w3.org/2000/svg"
      viewBox="0 0 0 0"
      width="0"
      height="0"
      focusable="false"
      role="none"
      style="
        visibility: hidden;
        position: absolute;
        left: -9999px;
        overflow: hidden;
      "
    >
      <defs>
        <filter id="wp-duotone-purple-green">
          <feColorMatrix
            color-interpolation-filters="sRGB"
            type="matrix"
            values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "
          />
          <feComponentTransfer color-interpolation-filters="sRGB">
            <feFuncR
              type="table"
              tableValues="0.65098039215686 0.40392156862745"
            />
            <feFuncG type="table" tableValues="0 1" />
            <feFuncB type="table" tableValues="0.44705882352941 0.4" />
            <feFuncA type="table" tableValues="1 1" />
          </feComponentTransfer>
          <feComposite in2="SourceGraphic" operator="in" />
        </filter>
      </defs>
    </svg>
    <svg
      xmlns="http://www.w3.org/2000/svg"
      viewBox="0 0 0 0"
      width="0"
      height="0"
      focusable="false"
      role="none"
      style="
        visibility: hidden;
        position: absolute;
        left: -9999px;
        overflow: hidden;
      "
    >
      <defs>
        <filter id="wp-duotone-blue-orange">
          <feColorMatrix
            color-interpolation-filters="sRGB"
            type="matrix"
            values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "
          />
          <feComponentTransfer color-interpolation-filters="sRGB">
            <feFuncR type="table" tableValues="0.098039215686275 1" />
            <feFuncG type="table" tableValues="0 0.66274509803922" />
            <feFuncB
              type="table"
              tableValues="0.84705882352941 0.41960784313725"
            />
            <feFuncA type="table" tableValues="1 1" />
          </feComponentTransfer>
          <feComposite in2="SourceGraphic" operator="in" />
        </filter>
      </defs>
    </svg>
		<?php
			include("chunks/body/tags-body.php");
		?>
    <div
      data-elementor-type="wp-page"
      data-elementor-id="512"
      class="elementor elementor-512"
    >
      <section
        class="elementor-section elementor-top-section elementor-element elementor-element-2a12c01 animated-slow elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible"
        data-id="2a12c01"
        data-element_type="section"
        data-settings='{"animation":"fadeIn","background_background":"classic","background_motion_fx_motion_fx_scrolling":"yes","background_motion_fx_translateY_effect":"yes","background_motion_fx_translateY_speed":{"unit":"px","size":3,"sizes":[]},"background_motion_fx_translateY_affectedRange":{"unit":"%","size":"","sizes":{"start":0,"end":100}},"background_motion_fx_devices":["desktop","tablet","mobile"]}'
      >
        <div class="elementor-background-overlay"></div>
        <div class="elementor-container elementor-column-gap-default">
          <div
            class="elementor-column elementor-col-66 elementor-top-column elementor-element elementor-element-90a5ea4"
            data-id="90a5ea4"
            data-element_type="column"
            data-settings='{"background_background":"classic"}'
          >
            <div class="elementor-widget-wrap elementor-element-populated">
              <div
                class="elementor-element elementor-element-2525915 elementor-widget elementor-widget-spacer"
                data-id="2525915"
                data-element_type="widget"
                data-widget_type="spacer.default"
              >
                <div class="elementor-widget-container">
                  <div class="elementor-spacer">
                    <div class="elementor-spacer-inner"></div>
                  </div>
                </div>
              </div>
              <div
                class="elementor-element elementor-element-2905082 elementor-widget elementor-widget-heading"
                data-id="2905082"
                data-element_type="widget"
                data-widget_type="heading.default"
              >
                <div class="elementor-widget-container" id="#top">
                  <h2 class="elementor-heading-title elementor-size-large">
                    
                      DESCUBRA COMO <span style="color: #d33245">SER CONTRATADO COMO DEV</span> GANHANDO 5 MIL POR MÊS
                    <span style="color: #d33245"
                      >SEM EXPERIÊNCIA NA ÁREA!</span
                    >
                  </h2>
                </div>
           <a id="top">       <h4 style="color:white;">Inscreva-se agora para assistir à aula ao vivo gratuita!</h4> </a>
              </div>
              <div
                class="elementor-element elementor-element-95fd4f7 elementor-mobile-button-align-center elementor-button-align-stretch elementor-widget elementor-widget-form"
                data-id="95fd4f7"
                data-element_type="widget"
                data-settings='{"button_width_mobile":"100","step_next_label":"Pr\u00f3ximo","step_previous_label":"Anterior","button_width":"100","step_type":"number_text","step_icon_shape":"circle"}'
                data-widget_type="form.default"
              >
                <div class="elementor-widget-container">
									<?php
										include("chunks/body/ac-form-aula-campanha.php");
									?>
                </div>
              </div>
            </div>
          </div>
          <div
            class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-ea45fea elementor-hidden-tablet elementor-hidden-mobile"
            data-id="ea45fea"
            data-element_type="column"
          >
            <div class="elementor-widget-wrap elementor-element-populated">
              <div
                class="elementor-element elementor-element-b88ac40 elementor-hidden-mobile elementor-hidden-tablet elementor-widget elementor-widget-image"
                data-id="b88ac40"
                data-element_type="widget"
                data-widget_type="image.default"
              >
                <div class="elementor-widget-container">
                  <img
                    decoding="async"
                    width="600"
                    height="800"
                    src="https://conquistesuavaga.com/wp-content/uploads/2021/10/foto11.png"
                    class="attachment-large size-large wp-image-286"
                    alt=""
                    loading="lazy"
                    srcset="
                      https://conquistesuavaga.com/wp-content/uploads/2021/10/foto11.png         600w,
                      https://conquistesuavaga.com/wp-content/uploads/2021/10/foto11-225x300.png 225w
                    "
                    sizes="(max-width: 600px) 100vw, 600px"
                  />
                </div>
              </div>
              <div
                class="elementor-element elementor-element-fca5a61 elementor-widget elementor-widget-spacer"
                data-id="fca5a61"
                data-element_type="widget"
                data-widget_type="spacer.default"
              >
                <div class="elementor-widget-container">
                  <div class="elementor-spacer">
                    <div class="elementor-spacer-inner"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section
        class="elementor-section elementor-top-section elementor-element elementor-element-be76dea animated-slow elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible"
        data-id="be76dea"
        data-element_type="section"
        data-settings='{"background_background":"classic","animation":"fadeIn","shape_divider_bottom":"waves"}'
      >
        <div
          class="elementor-shape elementor-shape-bottom"
          data-negative="false"
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 1000 100"
            preserveAspectRatio="none"
          >
            <path
              class="elementor-shape-fill"
              d="M421.9,6.5c22.6-2.5,51.5,0.4,75.5,5.3c23.6,4.9,70.9,23.5,100.5,35.7c75.8,32.2,133.7,44.5,192.6,49.7c23.6,2.1,48.7,3.5,103.4-2.5c54.7-6,106.2-25.6,106.2-25.6V0H0v30.3c0,0,72,32.6,158.4,30.5c39.2-0.7,92.8-6.7,134-22.4c21.2-8.1,52.2-18.2,79.7-24.2C399.3,7.9,411.6,7.5,421.9,6.5z" 
            />
          </svg>
        </div>
        <div class="elementor-container elementor-column-gap-default">
          <div
            class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6944593"
            data-id="6944593"
            data-element_type="column"
            data-settings='{"background_background":"classic"}'
          >
            <div class="elementor-widget-wrap elementor-element-populated">
              <section
                class="elementor-section elementor-inner-section elementor-element elementor-element-bb7ec8c elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="bb7ec8c"
                data-element_type="section"
              >
                <div class="elementor-container elementor-column-gap-default">
                  <div
                    class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-245d24c"
                    data-id="245d24c"
                    data-element_type="column"
                  >
                    <div
                      class="elementor-widget-wrap elementor-element-populated"
                    >
                      <div
                        class="elementor-element elementor-element-3a066dd elementor-invisible elementor-widget elementor-widget-image"
                        data-id="3a066dd"
                        data-element_type="widget"
                        data-settings='{"motion_fx_motion_fx_scrolling":"yes","_animation":"fadeInLeft","motion_fx_devices":["desktop","tablet","mobile"]}'
                        data-widget_type="image.default"
                      >
                        <div class="elementor-widget-container">
                          <img
                            decoding="async"
                            width="768"
                            height="1024"
                            src="https://conquistesuavaga.com/wp-content/uploads/2021/10/foto33-768x1024.png"
                            class="attachment-medium_large size-medium_large wp-image-285"
                            alt=""
                            loading="lazy"
                            srcset="
                              https://conquistesuavaga.com/wp-content/uploads/2021/10/foto33-768x1024.png 768w,
                              https://conquistesuavaga.com/wp-content/uploads/2021/10/foto33-225x300.png  225w,
                              https://conquistesuavaga.com/wp-content/uploads/2021/10/foto33.png          960w
                            "
                            sizes="(max-width: 768px) 100vw, 768px"
                          />
                        </div>
                      </div>
                    </div>
                  </div>
                  <div
                    class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-0f235b2"
                    data-id="0f235b2"
                    data-element_type="column"
                  >
                    <div
                      class="elementor-widget-wrap elementor-element-populated"
                    >
                      <div
                        class="elementor-element elementor-element-4ff3cdd elementor-view-default elementor-invisible elementor-widget elementor-widget-icon"
                        data-id="4ff3cdd"
                        data-element_type="widget"
                        data-settings='{"motion_fx_motion_fx_scrolling":"yes","_animation":"slideInUp","_animation_delay":250,"motion_fx_devices":["desktop","tablet","mobile"]}'
                        data-widget_type="icon.default"
                      >
                        <div class="elementor-widget-container">
                          <div class="elementor-icon-wrapper">
                            <div class="elementor-icon">
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                id="Camada_1"
                                data-name="Camada 1"
                                viewBox="0 0 500 500"
                              >
                                <path
                                  d="M167.56,319.45h32a61.41,61.41,0,0,0,1,8.45,8.67,8.67,0,0,0,8.49,6.9h86.57a8.69,8.69,0,0,0,8.5-6.9,63,63,0,0,0,1-8.45h32a8.67,8.67,0,0,0,8.62-7.73c.21-1.86,4.36-44.77-31.56-65.16C321.33,206,326.47,119.44,258,60.47a7.28,7.28,0,0,0-.94-.53,8.61,8.61,0,0,0-1.51-.85,7.86,7.86,0,0,0-1.58-.43,6.91,6.91,0,0,0-3.26,0,7.86,7.86,0,0,0-1.58.43,8.61,8.61,0,0,0-1.51.85,6.67,6.67,0,0,0-.94.53c-68.49,59-63.34,145.49-56.18,186.09-35.92,20.39-31.77,63.3-31.56,65.16A8.68,8.68,0,0,0,167.56,319.45ZM252.33,78.83a145.56,145.56,0,0,1,28.41,37.51H223.91A145.82,145.82,0,0,1,252.33,78.83ZM194.39,264.59c.64,2.42,1.1,4,1.25,4.44a8.68,8.68,0,0,0,16.58-5.13c-.28-.89-20-67.36,3.86-130.2h72.5c23.88,62.84,4.13,129.31,3.85,130.2A8.68,8.68,0,0,0,309,269c.16-.49.62-2,1.25-4.44a49.73,49.73,0,0,1,18.28,37.51H303.76a46.6,46.6,0,0,0-23.85-32.76,8.68,8.68,0,1,0-8.27,15.26h0a31.67,31.67,0,0,1,15.94,26.13v0l0,.11a51.23,51.23,0,0,1,.24,6.55h-71a51.39,51.39,0,0,1,.24-6.56l0-.1v0a31.7,31.7,0,0,1,16-26.13,8.68,8.68,0,0,0-8.27-15.26h0a46.61,46.61,0,0,0-23.86,32.76H176.15A50.12,50.12,0,0,1,194.39,264.59Z"
                                ></path>
                                <path
                                  d="M252.32,222.25a37.14,37.14,0,1,0-37.13-37.14h0A37.16,37.16,0,0,0,252.32,222.25Zm0-56.92a19.79,19.79,0,1,1-19.78,19.79A19.79,19.79,0,0,1,252.32,165.33Z"
                                ></path>
                                <path
                                  d="M162.71,339.2a8.68,8.68,0,0,0-8.68,8.68v53.38a8.68,8.68,0,1,0,17.36,0V347.88A8.68,8.68,0,0,0,162.71,339.2Z"
                                ></path>
                                <path
                                  d="M253.62,339.2a8.68,8.68,0,0,0-8.67,8.68v53.38a8.68,8.68,0,1,0,17.35,0V347.88A8.68,8.68,0,0,0,253.62,339.2Z"
                                ></path>
                                <path
                                  d="M337.29,339.2a8.68,8.68,0,0,0-8.68,8.68v53.38a8.68,8.68,0,1,0,17.36,0V347.88A8.68,8.68,0,0,0,337.29,339.2Z"
                                ></path>
                                <path
                                  d="M208.17,339.2a8.68,8.68,0,0,0-8.68,8.68v85a8.68,8.68,0,0,0,17.35,0v-85A8.68,8.68,0,0,0,208.17,339.2Z"
                                ></path>
                                <path
                                  d="M299.08,339.2a8.68,8.68,0,0,0-8.67,8.68v85a8.68,8.68,0,0,0,17.35,0v-85A8.68,8.68,0,0,0,299.08,339.2Z"
                                ></path>
                              </svg>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div
                        class="elementor-element elementor-element-7c2706a elementor-invisible elementor-widget elementor-widget-heading"
                        data-id="7c2706a"
                        data-element_type="widget"
                        data-settings='{"motion_fx_motion_fx_scrolling":"yes","_animation":"fadeInRight","motion_fx_devices":["desktop","tablet","mobile"]}'
                        data-widget_type="heading.default"
                      >
                        <div class="elementor-widget-container">
                          <h2
                            class="elementor-heading-title elementor-size-default"
                          >
                            Pare de achar que vagas não são para você...
                          </h2>
                        </div>
                      </div>
                      <div
                        class="elementor-element elementor-element-458bbc5 elementor-widget elementor-widget-spacer"
                        data-id="458bbc5"
                        data-element_type="widget"
                        data-widget_type="spacer.default"
                      >
                        <div class="elementor-widget-container">
                          <div class="elementor-spacer">
                            <div class="elementor-spacer-inner"></div>
                          </div>
                        </div>
                      </div>
                      <div
                        class="elementor-element elementor-element-ba79883 elementor-invisible elementor-widget elementor-widget-text-editor"
                        data-id="ba79883"
                        data-element_type="widget"
                        data-settings='{"motion_fx_motion_fx_scrolling":"yes","_animation":"fadeInRight","motion_fx_devices":["desktop","tablet","mobile"]}'
                        data-widget_type="text-editor.default"
                      >
                        <div class="elementor-widget-container">
                          <p>
                            Você precisa descobrir os maiores<br />erros que
                            impedem desenvolvedores em formação de conseguir sua
                            vaga no mercado!
                          </p>
                        </div>
                      </div>
                      <div
                        class="elementor-element elementor-element-941a755 elementor-align-center elementor-invisible elementor-widget elementor-widget-button"
                        data-id="941a755"
                        data-element_type="widget"
                        data-settings='{"motion_fx_motion_fx_scrolling":"yes","motion_fx_scale_effect":"yes","motion_fx_scale_speed":{"unit":"px","size":10,"sizes":[]},"_animation":"fadeIn","motion_fx_scale_direction":"out-in","motion_fx_scale_range":{"unit":"%","size":"","sizes":{"start":20,"end":80}},"motion_fx_devices":["desktop","tablet","mobile"]}'
                        data-widget_type="button.default"
                      >
                        <div class="elementor-widget-container">
                          <div class="elementor-button-wrapper">
                            <a
                              href="#top"
                              class="elementor-button-link elementor-button elementor-size-sm"
                              role="button"
                            >
                              <span class="elementor-button-content-wrapper">
                                <span class="elementor-button-text"
                                  >EU QUERO!</span
                                >
                              </span>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
            </div>
          </div>
        </div>
      </section>
      <section
        class="elementor-section elementor-top-section elementor-element elementor-element-1afdfb2 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible"
        data-id="1afdfb2"
        data-element_type="section"
        data-settings='{"animation":"bounceInDown","background_background":"classic","shape_divider_bottom":"split","motion_fx_motion_fx_scrolling":"yes","motion_fx_devices":["desktop","tablet","mobile"]}'
      >
        <div
          class="elementor-shape elementor-shape-bottom"
          data-negative="false"
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 1000 20"
            preserveAspectRatio="none"
          >
            <path
              class="elementor-shape-fill"
              d="M0,0v3c0,0,393.8,0,483.4,0c9.2,0,16.6,7.4,16.6,16.6c0-9.1,7.4-16.6,16.6-16.6C606.2,3,1000,3,1000,3V0H0z"
            />
          </svg>
        </div>
        <div class="elementor-container elementor-column-gap-default">
          <div
            class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-53e69c6"
            data-id="53e69c6"
            data-element_type="column"
          >
            <div class="elementor-widget-wrap elementor-element-populated">
              <div
                class="elementor-element elementor-element-36f2b29 elementor-widget elementor-widget-spacer"
                data-id="36f2b29"
                data-element_type="widget"
                data-widget_type="spacer.default"
              >
                <div class="elementor-widget-container">
                  <div class="elementor-spacer">
                    <div class="elementor-spacer-inner"></div>
                  </div>
                </div>
              </div>
              <div
                class="elementor-element elementor-element-30dac0e elementor-invisible elementor-widget elementor-widget-heading"
                data-id="30dac0e"
                data-element_type="widget"
                data-settings='{"motion_fx_motion_fx_scrolling":"yes","_animation":"bounce","motion_fx_devices":["desktop","tablet","mobile"]}'
                data-widget_type="heading.default"
              >
                <div class="elementor-widget-container">
                  <h1 class="elementor-heading-title elementor-size-large">
                    Quando Vira Dev, você:
                  </h1>
                </div>
              </div>
              <section
                class="elementor-section elementor-inner-section elementor-element elementor-element-70ff4e7 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="70ff4e7"
                data-element_type="section"
              >
                <div class="elementor-container elementor-column-gap-default">
                  <div
                    class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-91cf8b6"
                    data-id="91cf8b6"
                    data-element_type="column"
                  >
                    <div
                      class="elementor-widget-wrap elementor-element-populated"
                    >
                      <div
                        class="elementor-element elementor-element-180f7d2 elementor-view-default elementor-mobile-position-top elementor-vertical-align-top elementor-invisible elementor-widget elementor-widget-icon-box"
                        data-id="180f7d2"
                        data-element_type="widget"
                        data-settings='{"motion_fx_motion_fx_scrolling":"yes","_animation":"bounceIn","motion_fx_devices":["desktop","tablet","mobile"]}'
                        data-widget_type="icon-box.default"
                      >
                        <div class="elementor-widget-container">
                          <div class="elementor-icon-box-wrapper">
                            <div class="elementor-icon-box-icon">
                              <span class="elementor-icon elementor-animation-">
                                <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  id="Camada_1"
                                  data-name="Camada 1"
                                  viewBox="0 0 200 200"
                                >
                                  <path
                                    d="M91.12,35.83h15.93a1.5,1.5,0,0,1,1.5,1.5h0a1.5,1.5,0,0,1-1.5,1.5H91.12a1.5,1.5,0,0,1-1.5-1.5h0A1.5,1.5,0,0,1,91.12,35.83Z"
                                  ></path>
                                  <path
                                    d="M69.68,35.83H85.93a1.5,1.5,0,0,1,1.5,1.5h0a1.5,1.5,0,0,1-1.5,1.5H69.68a1.5,1.5,0,0,1-1.5-1.5h0A1.5,1.5,0,0,1,69.68,35.83Z"
                                  ></path>
                                  <path
                                    d="M60.23,83.13a2.78,2.78,0,0,1-2.77-2.78A2.7,2.7,0,0,1,58,78.71l1.15-1.57a17.85,17.85,0,0,0,3.26-7.8l.23-1.79A26.67,26.67,0,0,1,54.46,48.7c0-16.21,15.77-29.4,35.16-29.4s35.17,13.19,35.17,29.4S109,78.09,89.62,78.09A41.15,41.15,0,0,1,73.79,75a20.87,20.87,0,0,1-11.14,7.61L61,83A3.22,3.22,0,0,1,60.23,83.13ZM89.62,22.3c-17.73,0-32.16,11.84-32.16,26.4A23.81,23.81,0,0,0,65.27,66l.56.52-.45,3.33A20.91,20.91,0,0,1,61.55,79l-.77,1,1-.29A17.77,17.77,0,0,0,72,72.25l.71-1.08,1.17.54a37.9,37.9,0,0,0,15.73,3.38c17.74,0,32.17-11.84,32.17-26.39S107.36,22.3,89.62,22.3Z"
                                  ></path>
                                  <path
                                    d="M137,96.41a3.23,3.23,0,0,1-.76-.1l-1.69-.46a20.7,20.7,0,0,1-11.13-7.62,41.21,41.21,0,0,1-15.84,3.14,39,39,0,0,1-23.5-7.52,1.5,1.5,0,0,1-.33-2.1l.06-.07h0a1.5,1.5,0,0,1,2.08-.22,36,36,0,0,0,21.69,6.91A37.74,37.74,0,0,0,123.33,85l1.22-.51.71,1.09A17.74,17.74,0,0,0,135.37,93l1,.29-.77-1a20.72,20.72,0,0,1-3.81-9.11l-.44-3.36.55-.53A23.8,23.8,0,0,0,139.77,62c0-8.31-4.77-16.09-12.82-21.08a1.51,1.51,0,0,1-.54-2h0a1.49,1.49,0,0,1,2-.59.6.6,0,0,1,.11.06c9,5.53,14.25,14.27,14.25,23.63a26.72,26.72,0,0,1-8.25,18.86l.24,1.82A17.8,17.8,0,0,0,138,90.42l1.07,1.46a2.9,2.9,0,0,1,.19,3.25A2.76,2.76,0,0,1,137,96.41Z"
                                  ></path>
                                  <path
                                    d="M107,48.84H79.55a1.55,1.55,0,0,1-1.6-1.5h0a1.54,1.54,0,0,1,1.6-1.5H107a1.54,1.54,0,0,1,1.6,1.49h0A1.57,1.57,0,0,1,107,48.84Z"
                                  ></path>
                                  <path
                                    d="M69.68,45.83h4a1.5,1.5,0,0,1,1.5,1.5h0a1.5,1.5,0,0,1-1.5,1.5h-4a1.5,1.5,0,0,1-1.5-1.5h0A1.5,1.5,0,0,1,69.68,45.83Z"
                                  ></path>
                                  <path
                                    d="M92.55,55.83h14.5a1.5,1.5,0,0,1,1.5,1.5h0a1.5,1.5,0,0,1-1.5,1.5H92.55a1.5,1.5,0,0,1-1.5-1.5h0A1.5,1.5,0,0,1,92.55,55.83Z"
                                  ></path>
                                  <path
                                    d="M69.68,55.83h8.5a1.5,1.5,0,0,1,1.5,1.5h0a1.5,1.5,0,0,1-1.5,1.5h-8.5a1.5,1.5,0,0,1-1.5-1.5h0A1.5,1.5,0,0,1,69.68,55.83Z"
                                  ></path>
                                  <path
                                    d="M84.3,55.71h2.5a1.5,1.5,0,0,1,1.5,1.5h0a1.5,1.5,0,0,1-1.5,1.5H84.3a1.5,1.5,0,0,1-1.5-1.5h0A1.5,1.5,0,0,1,84.3,55.71Z"
                                  ></path>
                                  <path
                                    d="M57.09,149.31a22.45,22.45,0,1,1,22.4-22.49A22.42,22.42,0,0,1,57.09,149.31Zm0-37.23a14.79,14.79,0,1,0,14.84,14.74A14.85,14.85,0,0,0,57.09,112.08Z"
                                  ></path>
                                  <path
                                    d="M88.58,180.7a3.84,3.84,0,0,1-3.83-3.83,27.66,27.66,0,0,0-55.32,0,3.83,3.83,0,1,1-7.65,0,35.22,35.22,0,0,1,70.44,0A3.62,3.62,0,0,1,88.58,180.7Z"
                                  ></path>
                                  <path
                                    d="M143.09,149.31a22.45,22.45,0,1,1,22.4-22.49A22.42,22.42,0,0,1,143.09,149.31Zm0-37.23a14.79,14.79,0,1,0,14.84,14.74A14.85,14.85,0,0,0,143.09,112.08Z"
                                  ></path>
                                  <path
                                    d="M174.58,180.7a3.84,3.84,0,0,1-3.83-3.83,27.66,27.66,0,0,0-55.32,0,3.83,3.83,0,1,1-7.65,0,35.22,35.22,0,0,1,70.44,0A3.62,3.62,0,0,1,174.58,180.7Z"
                                  ></path>
                                </svg>
                              </span>
                            </div>
                            <div class="elementor-icon-box-content">
                              <h3 class="elementor-icon-box-title">
                                <span>
                                  Para de enviar currículos sem nunca receber
                                  respostas!
                                </span>
                              </h3>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div
                    class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-f6bdc81"
                    data-id="f6bdc81"
                    data-element_type="column"
                  >
                    <div
                      class="elementor-widget-wrap elementor-element-populated"
                    >
                      <div
                        class="elementor-element elementor-element-c18f97c elementor-view-default elementor-mobile-position-top elementor-vertical-align-top elementor-invisible elementor-widget elementor-widget-icon-box"
                        data-id="c18f97c"
                        data-element_type="widget"
                        data-settings='{"motion_fx_motion_fx_scrolling":"yes","_animation":"bounceIn","motion_fx_devices":["desktop","tablet","mobile"]}'
                        data-widget_type="icon-box.default"
                      >
                        <div class="elementor-widget-container">
                          <div class="elementor-icon-box-wrapper">
                            <div class="elementor-icon-box-icon">
                              <span class="elementor-icon elementor-animation-">
                                <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  id="Camada_1"
                                  data-name="Camada 1"
                                  viewBox="0 0 200 200"
                                >
                                  <path
                                    d="M162.84,33.63a4,4,0,0,0-2.77,1.24c-7.82,7.83-14.95,15.54-22.51,23.23l-9.26-7.39a4,4,0,0,0-5,6.31h0l12.11,9.69a4,4,0,0,0,5.37-.31c8.7-8.71,16.5-17.28,25-25.83a4,4,0,0,0,.1-5.71A4.09,4.09,0,0,0,162.84,33.63Z"
                                  ></path>
                                  <path
                                    d="M77,140.13a26.57,26.57,0,1,1,26.5-26.62A26.55,26.55,0,0,1,77,140.13Zm0-44.07a17.5,17.5,0,1,0,17.56,17.45A17.58,17.58,0,0,0,77,96.06Z"
                                  ></path>
                                  <path
                                    d="M114.21,177.28a4.55,4.55,0,0,1-4.53-4.53,32.74,32.74,0,1,0-65.47,0,4.53,4.53,0,0,1-9.06,0,41.69,41.69,0,1,1,83.37,0A4.29,4.29,0,0,1,114.21,177.28Z"
                                  ></path>
                                  <path
                                    d="M144.74,18.81c22,0,39.77,13.44,39.77,30s-17.8,30-39.77,30a51.74,51.74,0,0,1-10-1,3.19,3.19,0,0,0-.45,0c-3.63,0-12.35,6.86-16,6.86a1.92,1.92,0,0,1-.79-.14c-3.79-1.68,0-13.63-2.83-16.11-6-5.26-9.68-12.13-9.68-19.63,0-16.58,17.8-30,39.77-30m0-9.49c-12.67,0-24.69,3.8-33.84,10.71-9.8,7.39-15.42,17.89-15.42,28.8,0,9.12,3.83,17.84,10.84,24.83,0,.69,0,1.48-.06,2.1-.2,5.23-.52,14,7.38,17.48a11.26,11.26,0,0,0,4.63,1c4.29,0,8.35-2.25,12.64-4.63,1.09-.61,2.74-1.53,3.83-2a62.75,62.75,0,0,0,10,.8c12.67,0,24.69-3.8,33.84-10.7,9.8-7.4,15.42-17.9,15.42-28.8s-5.62-21.4-15.42-28.8c-9.15-6.91-21.17-10.71-33.84-10.71Z"
                                  ></path>
                                </svg>
                              </span>
                            </div>
                            <div class="elementor-icon-box-content">
                              <h3 class="elementor-icon-box-title">
                                <span>
                                  Sabe como ser contratado como dev sem nunca
                                  ter trabalhado na área!
                                </span>
                              </h3>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div
                    class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-6c6b6b1"
                    data-id="6c6b6b1"
                    data-element_type="column"
                  >
                    <div
                      class="elementor-widget-wrap elementor-element-populated"
                    >
                      <div
                        class="elementor-element elementor-element-ab3f94a elementor-view-default elementor-mobile-position-top elementor-vertical-align-top elementor-invisible elementor-widget elementor-widget-icon-box"
                        data-id="ab3f94a"
                        data-element_type="widget"
                        data-settings='{"motion_fx_motion_fx_scrolling":"yes","_animation":"bounceIn","motion_fx_devices":["desktop","tablet","mobile"]}'
                        data-widget_type="icon-box.default"
                      >
                        <div class="elementor-widget-container">
                          <div class="elementor-icon-box-wrapper">
                            <div class="elementor-icon-box-icon">
                              <span class="elementor-icon elementor-animation-">
                                <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  id="Camada_1"
                                  data-name="Camada 1"
                                  viewBox="0 0 200 200"
                                >
                                  <path
                                    d="M33.61,125.65H91a3,3,0,0,0,0-6H36.62V68.31h3a9.06,9.06,0,0,0,9.06-9.06v-3H69.82a3,3,0,1,0,0-6H45.68a3,3,0,0,0-3,3v6a3,3,0,0,1-3,3h-6a3,3,0,0,0-3,3v57.34A3,3,0,0,0,33.61,125.65Z"
                                  ></path>
                                  <path
                                    d="M57.75,98.49a3,3,0,0,0,3,3H100a3,3,0,1,0,0-6H60.77A3,3,0,0,0,57.75,98.49Z"
                                  ></path>
                                  <path
                                    d="M118.11,122.63a15.09,15.09,0,1,0,15.09-15.09A15.09,15.09,0,0,0,118.11,122.63Zm24.14,0a9.06,9.06,0,1,1-9.05-9A9,9,0,0,1,142.25,122.63Z"
                                  ></path>
                                  <path
                                    d="M178.47,38.13H166.39a3,3,0,0,0,0,6h9.06v87.52H160.51c.06,0,.1-.09.16-.12l.82-.47a9.74,9.74,0,0,0,0-16.9l-.82-.48c-.06,0-.1-.09-.16-.12h5.88a3,3,0,0,0,3-3V53.22a3,3,0,0,0-3-3h-9V34.81L167.22,32a3,3,0,0,0,0-5.8L125,14.11a3.12,3.12,0,0,0-1.66,0l-7.84,2.25a3,3,0,1,0,1.66,5.8l7-2,31.27,8.93L124.14,38,92.88,29.07l12.6-3.6a3,3,0,1,0-1.66-5.8l-22.76,6.5a3.05,3.05,0,0,0-2.19,2.9v9.06H21.53a3,3,0,0,0-3,3V134.7a3,3,0,0,0,3,3H107a9.49,9.49,0,0,0,.24,4.17L91.35,169.41a3,3,0,0,0,4,4.22L110.75,166l.72,11,.38,6v.19a3,3,0,0,0,2.33,2.75,3.08,3.08,0,0,0,.68.08,3,3,0,0,0,2.61-1.51l.88-1.51,3.49-6,11.36-19.66,15.71,27.21a3,3,0,0,0,2.61,1.51,3.25,3.25,0,0,0,.69-.08,3,3,0,0,0,2.32-2.75l1.11-17.2,15.45,7.65a3,3,0,0,0,3.95-4.22l-15.89-27.52a9.64,9.64,0,0,0,.25-4.17h19.07a3,3,0,0,0,3-3V41.15A3,3,0,0,0,178.47,38.13ZM97,36.53l26.33,7.52a3.19,3.19,0,0,0,1.66,0l26.33-7.52V63.39a64.84,64.84,0,0,1-54.32,0ZM84.91,33.08l6,1.73v3.32h-6Zm0,35.23V44.16h6V65.29A3,3,0,0,0,92.62,68a69.67,69.67,0,0,0,7.86,3.34H84.36A9.16,9.16,0,0,0,84.91,68.31Zm42.25,9v6H72.84v-6Zm-54.32-9a3,3,0,1,1,3,3A3,3,0,0,1,72.84,68.31Zm44.4,104.54-.76-11.77a3,3,0,0,0-4.35-2.52l-10.56,5.23,9.56-16.55a9.58,9.58,0,0,0,8.05,1.37l.9-.24a3.71,3.71,0,0,1,4.19,1.73l.47.83a9.74,9.74,0,0,0,3.21,3.36Zm47.58-9.06-10.56-5.23a3,3,0,0,0-4,1.37,3.08,3.08,0,0,0-.31,1.14l-.76,11.77-10.71-18.55a9.68,9.68,0,0,0,3.21-3.37l.47-.82a3.7,3.7,0,0,1,4.19-1.73l.91.24a9.59,9.59,0,0,0,8.05-1.37ZM151.4,96.44a9.52,9.52,0,0,0-4.18.21,3,3,0,1,0,1.42,5.86l.17,0a3.71,3.71,0,0,1,4.55,2.6,3.79,3.79,0,0,1,0,2l-.25.91a9.74,9.74,0,0,0,4.56,11l.82.47a3.7,3.7,0,0,1,1.37,5.06,3.61,3.61,0,0,1-1.37,1.37l-.82.47a9.76,9.76,0,0,0-4.56,11l.25.9a3.7,3.7,0,0,1-2.6,4.55,3.59,3.59,0,0,1-1.95,0l-.91-.24a9.72,9.72,0,0,0-11,4.56l-.47.82a3.71,3.71,0,0,1-6.43,0l-.47-.83a9.75,9.75,0,0,0-11-4.54l-.91.25a3.72,3.72,0,0,1-4.55-2.61,3.79,3.79,0,0,1,0-1.95l.25-.9a9.74,9.74,0,0,0-4.56-11l-.82-.47a3.7,3.7,0,0,1-1.37-5.06,3.75,3.75,0,0,1,1.37-1.37l.82-.47a9.74,9.74,0,0,0,4.55-11L113,107a3.7,3.7,0,0,1,2.61-4.55,3.59,3.59,0,0,1,2,0l.9.24a9.73,9.73,0,0,0,11-4.56l.47-.82a3.72,3.72,0,0,1,6.44,0,3,3,0,1,0,5.24-3,9.75,9.75,0,0,0-16.9,0l-.47.82a3.73,3.73,0,0,1-4.2,1.74l-.9-.25a9.73,9.73,0,0,0-12,6.82,9.64,9.64,0,0,0-.22,4.07H54.73a3,3,0,1,0,0,6h51.15c-.06,0-.09.09-.15.12l-.83.47a9.74,9.74,0,0,0,0,16.9l.82.47a1.83,1.83,0,0,0,.16.13H24.55V44.16H78.87V59.81a8.82,8.82,0,0,0-3-.56,9,9,0,0,0-8.15,12.94,3,3,0,0,0-.91,2.15V86.41a3,3,0,0,0,3,3h60.36a3,3,0,0,0,3-3V74.79A70.26,70.26,0,0,0,155.67,68a3,3,0,0,0,1.67-2.72V56.24h6v51.3h-3a7.93,7.93,0,0,0-1,.1A9.72,9.72,0,0,0,151.4,96.44Z"
                                  ></path>
                                </svg>
                              </span>
                            </div>
                            <div class="elementor-icon-box-content">
                              <h3 class="elementor-icon-box-title">
                                <span>
                                  Descobre os segredos do mercado que os
                                  <b>cursos não ensinam</b>!
                                </span>
                              </h3>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              <div
                class="elementor-element elementor-element-ec30a21 elementor-widget elementor-widget-spacer"
                data-id="ec30a21"
                data-element_type="widget"
                data-widget_type="spacer.default"
              >
                <div class="elementor-widget-container">
                  <div class="elementor-spacer">
                    <div class="elementor-spacer-inner"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section
        class="elementor-section elementor-top-section elementor-element elementor-element-6c67c5a animated-slow elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible"
        data-id="6c67c5a"
        data-element_type="section"
        data-settings='{"background_background":"classic","animation":"fadeIn"}'
      >
        <div class="elementor-container elementor-column-gap-default">
          <div
            class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-e506c2b"
            data-id="e506c2b"
            data-element_type="column"
          >
            <div class="elementor-widget-wrap elementor-element-populated">
              <div
                class="elementor-element elementor-element-37fda92 elementor-widget elementor-widget-spacer"
                data-id="37fda92"
                data-element_type="widget"
                data-widget_type="spacer.default"
              >
                <div class="elementor-widget-container">
                  <div class="elementor-spacer">
                    <div class="elementor-spacer-inner"></div>
                  </div>
                </div>
              </div>
              <div
                class="elementor-element elementor-element-a074bcf animated-slow elementor-view-default elementor-invisible elementor-widget elementor-widget-icon"
                data-id="a074bcf"
                data-element_type="widget"
                data-settings='{"motion_fx_motion_fx_scrolling":"yes","_animation":"bounceInUp","motion_fx_devices":["desktop","tablet","mobile"]}'
                data-widget_type="icon.default"
              >
                <div class="elementor-widget-container">
                  <div class="elementor-icon-wrapper">
                    <div class="elementor-icon">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        id="Camada_1"
                        data-name="Camada 1"
                        viewBox="0 0 500 500"
                      >
                        <path
                          d="M167.56,319.45h32a61.41,61.41,0,0,0,1,8.45,8.67,8.67,0,0,0,8.49,6.9h86.57a8.69,8.69,0,0,0,8.5-6.9,63,63,0,0,0,1-8.45h32a8.67,8.67,0,0,0,8.62-7.73c.21-1.86,4.36-44.77-31.56-65.16C321.33,206,326.47,119.44,258,60.47a7.28,7.28,0,0,0-.94-.53,8.61,8.61,0,0,0-1.51-.85,7.86,7.86,0,0,0-1.58-.43,6.91,6.91,0,0,0-3.26,0,7.86,7.86,0,0,0-1.58.43,8.61,8.61,0,0,0-1.51.85,6.67,6.67,0,0,0-.94.53c-68.49,59-63.34,145.49-56.18,186.09-35.92,20.39-31.77,63.3-31.56,65.16A8.68,8.68,0,0,0,167.56,319.45ZM252.33,78.83a145.56,145.56,0,0,1,28.41,37.51H223.91A145.82,145.82,0,0,1,252.33,78.83ZM194.39,264.59c.64,2.42,1.1,4,1.25,4.44a8.68,8.68,0,0,0,16.58-5.13c-.28-.89-20-67.36,3.86-130.2h72.5c23.88,62.84,4.13,129.31,3.85,130.2A8.68,8.68,0,0,0,309,269c.16-.49.62-2,1.25-4.44a49.73,49.73,0,0,1,18.28,37.51H303.76a46.6,46.6,0,0,0-23.85-32.76,8.68,8.68,0,1,0-8.27,15.26h0a31.67,31.67,0,0,1,15.94,26.13v0l0,.11a51.23,51.23,0,0,1,.24,6.55h-71a51.39,51.39,0,0,1,.24-6.56l0-.1v0a31.7,31.7,0,0,1,16-26.13,8.68,8.68,0,0,0-8.27-15.26h0a46.61,46.61,0,0,0-23.86,32.76H176.15A50.12,50.12,0,0,1,194.39,264.59Z"
                        ></path>
                        <path
                          d="M252.32,222.25a37.14,37.14,0,1,0-37.13-37.14h0A37.16,37.16,0,0,0,252.32,222.25Zm0-56.92a19.79,19.79,0,1,1-19.78,19.79A19.79,19.79,0,0,1,252.32,165.33Z"
                        ></path>
                        <path
                          d="M162.71,339.2a8.68,8.68,0,0,0-8.68,8.68v53.38a8.68,8.68,0,1,0,17.36,0V347.88A8.68,8.68,0,0,0,162.71,339.2Z"
                        ></path>
                        <path
                          d="M253.62,339.2a8.68,8.68,0,0,0-8.67,8.68v53.38a8.68,8.68,0,1,0,17.35,0V347.88A8.68,8.68,0,0,0,253.62,339.2Z"
                        ></path>
                        <path
                          d="M337.29,339.2a8.68,8.68,0,0,0-8.68,8.68v53.38a8.68,8.68,0,1,0,17.36,0V347.88A8.68,8.68,0,0,0,337.29,339.2Z"
                        ></path>
                        <path
                          d="M208.17,339.2a8.68,8.68,0,0,0-8.68,8.68v85a8.68,8.68,0,0,0,17.35,0v-85A8.68,8.68,0,0,0,208.17,339.2Z"
                        ></path>
                        <path
                          d="M299.08,339.2a8.68,8.68,0,0,0-8.67,8.68v85a8.68,8.68,0,0,0,17.35,0v-85A8.68,8.68,0,0,0,299.08,339.2Z"
                        ></path>
                      </svg>
                    </div>
                  </div>
                </div>
              </div>
              <section
                class="elementor-section elementor-inner-section elementor-element elementor-element-04d38d1 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="04d38d1"
                data-element_type="section"
                data-settings='{"background_background":"classic"}'
              >
                <div class="elementor-container elementor-column-gap-default">
                  <div
                    class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-2df35d9"
                    data-id="2df35d9"
                    data-element_type="column"
                  >
                    <div
                      class="elementor-widget-wrap elementor-element-populated"
                    >
                      <div
                        class="elementor-element elementor-element-1cf5e04 elementor-invisible elementor-widget elementor-widget-text-editor"
                        data-id="1cf5e04"
                        data-element_type="widget"
                        data-settings='{"_animation":"rotateInUpRight"}'
                        data-widget_type="text-editor.default"
                      >
                        <div class="elementor-widget-container">
                          <h4>
                            Faaaaala! Eu sou o <strong>Pedro Marins!</strong>
                          </h4>
                          &nbsp;
                          <p style="font-size: 18px">
                            Comecei a trabalhar como dev
                            <strong>há 15 anos</strong> e hoje também atuo como
                            professor na Alura e no Ibmec.
                          </p>
                          <p style="font-size: 18px"></p>
                          <p style="font-size: 18px">
                            <strong
                              >Sou MBA em Gestão de Conhecimento e Negócios pela
                              COPPE/UFRJ</strong
                            >, e tenho minha empresa de desenvolvimento de
                            software, onde sou criador de negócios inovadores.
                          </p>
                          &nbsp;
                          <p style="font-size: 18px">
                            Depois de trabalhar em uma centena de projetos,
                            montar dezenas de equipes e entrevistar mais de mil
                            pessoas, chegou a hora de mostrar como eu construí
                            minha carreira e ajudar você a conquistar sua vaga
                            também!
                          </p>
                          &nbsp;
                          <p style="font-size: 18px">
                            <strong>Minha missão</strong> é ajudar quem
                            <strong>deseja começar na carreira de dev</strong> a
                            se preparar para se <strong>transformar</strong> em
                            um dev <strong>desejado pelo mercado!</strong>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div
                    class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-d6e185f"
                    data-id="d6e185f"
                    data-element_type="column"
                  >
                    <div
                      class="elementor-widget-wrap elementor-element-populated"
                    >
                      <div
                        class="elementor-element elementor-element-602b1b3 elementor-invisible elementor-widget elementor-widget-image"
                        data-id="602b1b3"
                        data-element_type="widget"
                        data-settings='{"motion_fx_motion_fx_scrolling":"yes","_animation":"fadeIn","motion_fx_devices":["desktop","tablet","mobile"]}'
                        data-widget_type="image.default"
                      >
                        <div class="elementor-widget-container">
                          <img
                            decoding="async"
                            width="300"
                            height="300"
                            src="https://conquistesuavaga.com/wp-content/uploads/2021/10/edit1-1.png"
                            class="attachment-medium size-medium wp-image-313"
                            alt=""
                            loading="lazy"
                            srcset="
                              https://conquistesuavaga.com/wp-content/uploads/2021/10/edit1-1.png         300w,
                              https://conquistesuavaga.com/wp-content/uploads/2021/10/edit1-1-150x150.png 150w
                            "
                            sizes="(max-width: 300px) 100vw, 300px"
                          />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              <div
                class="elementor-element elementor-element-73fa083 elementor-widget elementor-widget-spacer"
                data-id="73fa083"
                data-element_type="widget"
                data-widget_type="spacer.default"
              >
                <div class="elementor-widget-container">
                  <div class="elementor-spacer">
                    <div class="elementor-spacer-inner"></div>
                  </div>
                </div>
              </div>
              <div
                class="elementor-element elementor-element-073fb5d elementor-align-center elementor-invisible elementor-widget elementor-widget-button"
                data-id="073fb5d"
                data-element_type="widget"
                data-settings='{"motion_fx_motion_fx_scrolling":"yes","motion_fx_scale_effect":"yes","motion_fx_scale_speed":{"unit":"px","size":10,"sizes":[]},"_animation":"fadeIn","motion_fx_scale_direction":"out-in","motion_fx_scale_range":{"unit":"%","size":"","sizes":{"start":20,"end":80}},"motion_fx_devices":["desktop","tablet","mobile"]}'
                data-widget_type="button.default"
              >
                <div class="elementor-widget-container">
                  <div class="elementor-button-wrapper">
                    <a
                      href="#top"
                      class="elementor-button-link elementor-button elementor-size-sm"
                      role="button"
                    >
                      <span class="elementor-button-content-wrapper">
                        <span class="elementor-button-text">EU QUERO!</span>
                      </span>
                    </a>
                  </div>
                </div>
              </div>
              <div
                class="elementor-element elementor-element-f90ae10 elementor-widget elementor-widget-spacer"
                data-id="f90ae10"
                data-element_type="widget"
                data-widget_type="spacer.default"
              >
                <div class="elementor-widget-container">
                  <div class="elementor-spacer">
                    <div class="elementor-spacer-inner"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section
        class="elementor-section elementor-top-section elementor-element elementor-element-aab803b elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="aab803b"
        data-element_type="section"
        data-settings='{"background_background":"classic"}'
      >
        <div class="elementor-container elementor-column-gap-default">
          <div
            class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-1b4fdc7"
            data-id="1b4fdc7"
            data-element_type="column"
          >
            <div class="elementor-widget-wrap elementor-element-populated">
              <div
                class="elementor-element elementor-element-e576093 elementor-widget elementor-widget-spacer"
                data-id="e576093"
                data-element_type="widget"
                data-widget_type="spacer.default"
              >
                <div class="elementor-widget-container">
                  <div class="elementor-spacer">
                    <div class="elementor-spacer-inner"></div>
                  </div>
                </div>
              </div>
              <div
                class="elementor-element elementor-element-66ab9fa elementor-widget elementor-widget-text-editor"
                data-id="66ab9fa"
                data-element_type="widget"
                data-widget_type="text-editor.default"
              >
                <div class="elementor-widget-container">
                  <p>Ficou com alguma dúvida?</p>
                </div>
              </div>
              <div
                class="elementor-element elementor-element-ffbe68f elementor-widget elementor-widget-text-editor"
                data-id="ffbe68f"
                data-element_type="widget"
                data-widget_type="text-editor.default"
              >
                <div class="elementor-widget-container">
                  <p>
                    <span style="text-decoration-line: underline"
                      ><a href="https://conquistesuavaga.com/whatsapp-direto"
                        ><span style="color: white"
                          >Envie uma mensagem no WhatsApp</span
                        ></a
                      ></span
                    >
                  </p>
                  <p>
                    Nosso time ficará feliz de responder a todas suas perguntas!
                  </p>
                </div>
              </div>
              <div
                class="elementor-element elementor-element-a586eae elementor-widget elementor-widget-spacer"
                data-id="a586eae"
                data-element_type="widget"
                data-widget_type="spacer.default"
              >
                <div class="elementor-widget-container">
                  <div class="elementor-spacer">
                    <div class="elementor-spacer-inner"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section
        class="elementor-section elementor-top-section elementor-element elementor-element-a7b1775 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="a7b1775"
        data-element_type="section"
        data-settings='{"background_background":"classic"}'
      >
        <div class="elementor-container elementor-column-gap-default">
          <div
            class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-8f6239e"
            data-id="8f6239e"
            data-element_type="column"
          >
            <div class="elementor-widget-wrap elementor-element-populated">
              <div
                class="elementor-element elementor-element-cc26735 elementor-widget elementor-widget-text-editor"
                data-id="cc26735"
                data-element_type="widget"
                data-widget_type="text-editor.default"
              >
                <div class="elementor-widget-container">
                  <h6>
                    <a
                      href="https://www.conquistandosuavaga.com/termos-de-uso"
                      target="_blank"
                      rel="noopener"
                      ><span style="color: white">Termos de Uso</span></a
                    > | <a
                      href="https://www.conquistandosuavaga.com/politica-de-privacidade"
                      target="_blank"
                      rel="noopener"
                      ><span style="color: white"
                        >Política de Privacidade</span
                      ></a
                    >
                  </h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <link
      rel="stylesheet"
      id="e-animations-css"
      href="https://conquistesuavaga.com/wp-content/plugins/elementor/assets/lib/animations/animations.min.css?ver=3.13.4"
      media="all"
    />
    <script id="site_tracking-js-extra">
      var php_data = {
        ac_settings: {
          tracking_actid: 612135076,
          site_tracking_default: 1,
          site_tracking: 1,
        },
        user_email: "",
      };
    </script>
    <script
      src="https://conquistesuavaga.com/wp-content/plugins/activecampaign-subscription-forms/site_tracking.js?ver=6.2.2"
      id="site_tracking-js"
    ></script>
    <script
      src="https://conquistesuavaga.com/wp-content/plugins/elementor-pro/assets/js/webpack-pro.runtime.min.js?ver=3.13.2"
      id="elementor-pro-webpack-runtime-js"
    ></script>
    <script
      src="https://conquistesuavaga.com/wp-content/plugins/elementor/assets/js/webpack.runtime.min.js?ver=3.13.4"
      id="elementor-webpack-runtime-js"
    ></script>
    <script
      src="https://conquistesuavaga.com/wp-content/plugins/elementor/assets/js/frontend-modules.min.js?ver=3.13.4"
      id="elementor-frontend-modules-js"
    ></script>
    <script
      src="https://conquistesuavaga.com/wp-includes/js/dist/vendor/wp-polyfill-inert.min.js?ver=3.1.2"
      id="wp-polyfill-inert-js"
    ></script>
    <script
      src="https://conquistesuavaga.com/wp-includes/js/dist/vendor/regenerator-runtime.min.js?ver=0.13.11"
      id="regenerator-runtime-js"
    ></script>
    <script
      src="https://conquistesuavaga.com/wp-includes/js/dist/vendor/wp-polyfill.min.js?ver=3.15.0"
      id="wp-polyfill-js"
    ></script>
    <script
      src="https://conquistesuavaga.com/wp-includes/js/dist/hooks.min.js?ver=4169d3cf8e8d95a3d6d5"
      id="wp-hooks-js"
    ></script>
    <script
      src="https://conquistesuavaga.com/wp-includes/js/dist/i18n.min.js?ver=9e794f35a71bb98672ae"
      id="wp-i18n-js"
    ></script>
    <script id="wp-i18n-js-after">
      wp.i18n.setLocaleData({ "text direction\u0004ltr": ["ltr"] });
    </script>
    <script id="elementor-pro-frontend-js-before">
      var ElementorProFrontendConfig = {
        ajaxurl: "https:\/\/conquistesuavaga.com\/wp-admin\/admin-ajax.php",
        nonce: "6c73691598",
        urls: {
          assets:
            "https:\/\/conquistesuavaga.com\/wp-content\/plugins\/elementor-pro\/assets\/",
          rest: "https:\/\/conquistesuavaga.com\/wp-json\/",
        },
        shareButtonsNetworks: {
          facebook: { title: "Facebook", has_counter: true },
          twitter: { title: "Twitter" },
          linkedin: { title: "LinkedIn", has_counter: true },
          pinterest: { title: "Pinterest", has_counter: true },
          reddit: { title: "Reddit", has_counter: true },
          vk: { title: "VK", has_counter: true },
          odnoklassniki: { title: "OK", has_counter: true },
          tumblr: { title: "Tumblr" },
          digg: { title: "Digg" },
          skype: { title: "Skype" },
          stumbleupon: { title: "StumbleUpon", has_counter: true },
          mix: { title: "Mix" },
          telegram: { title: "Telegram" },
          pocket: { title: "Pocket", has_counter: true },
          xing: { title: "XING", has_counter: true },
          whatsapp: { title: "WhatsApp" },
          email: { title: "Email" },
          print: { title: "Print" },
        },
        facebook_sdk: { lang: "pt_BR", app_id: "" },
        lottie: {
          defaultAnimationUrl:
            "https:\/\/conquistesuavaga.com\/wp-content\/plugins\/elementor-pro\/modules\/lottie\/assets\/animations\/default.json",
        },
      };
    </script>
    <script
      src="https://conquistesuavaga.com/wp-content/plugins/elementor-pro/assets/js/frontend.min.js?ver=3.13.2"
      id="elementor-pro-frontend-js"
    ></script>
    <script
      src="https://conquistesuavaga.com/wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min.js?ver=4.0.2"
      id="elementor-waypoints-js"
    ></script>
    <script
      src="https://conquistesuavaga.com/wp-includes/js/jquery/ui/core.min.js?ver=1.13.2"
      id="jquery-ui-core-js"
    ></script>
    <script
      src="https://conquistesuavaga.com/wp-content/plugins/elementor/assets/lib/swiper/swiper.min.js?ver=5.3.6"
      id="swiper-js"
    ></script>
    <script
      src="https://conquistesuavaga.com/wp-content/plugins/elementor/assets/lib/share-link/share-link.min.js?ver=3.13.4"
      id="share-link-js"
    ></script>
    <script
      src="https://conquistesuavaga.com/wp-content/plugins/elementor/assets/lib/dialog/dialog.min.js?ver=4.9.0"
      id="elementor-dialog-js"
    ></script>
    <script id="elementor-frontend-js-extra">
      var uael_particles_script = {
        uael_particles_url:
          "https:\/\/conquistesuavaga.com\/wp-content\/plugins\/ultimate-elementor\/assets\/min-js\/uael-particles.min.js",
        particles_url:
          "https:\/\/conquistesuavaga.com\/wp-content\/plugins\/ultimate-elementor\/assets\/lib\/particles\/particles.min.js",
        snowflakes_image:
          "https:\/\/conquistesuavaga.com\/wp-content\/plugins\/ultimate-elementor\/assets\/img\/snowflake.svg",
        gift: "https:\/\/conquistesuavaga.com\/wp-content\/plugins\/ultimate-elementor\/assets\/img\/gift.png",
        tree: "https:\/\/conquistesuavaga.com\/wp-content\/plugins\/ultimate-elementor\/assets\/img\/tree.png",
        skull:
          "https:\/\/conquistesuavaga.com\/wp-content\/plugins\/ultimate-elementor\/assets\/img\/skull.png",
        ghost:
          "https:\/\/conquistesuavaga.com\/wp-content\/plugins\/ultimate-elementor\/assets\/img\/ghost.png",
        moon: "https:\/\/conquistesuavaga.com\/wp-content\/plugins\/ultimate-elementor\/assets\/img\/moon.png",
        bat: "https:\/\/conquistesuavaga.com\/wp-content\/plugins\/ultimate-elementor\/assets\/img\/bat.png",
        pumpkin:
          "https:\/\/conquistesuavaga.com\/wp-content\/plugins\/ultimate-elementor\/assets\/img\/pumpkin.png",
      };
    </script>
    <script id="elementor-frontend-js-before">
      var elementorFrontendConfig = {
        environmentMode: {
          edit: false,
          wpPreview: false,
          isScriptDebug: false,
        },
        i18n: {
          shareOnFacebook: "Compartilhar no Facebook",
          shareOnTwitter: "Compartilhar no Twitter",
          pinIt: "Fixar",
          download: "Baixar",
          downloadImage: "Baixar imagem",
          fullscreen: "Tela cheia",
          zoom: "Zoom",
          share: "Compartilhar",
          playVideo: "Reproduzir v\u00eddeo",
          previous: "Anterior",
          next: "Pr\u00f3ximo",
          close: "Fechar",
        },
        is_rtl: false,
        breakpoints: { xs: 0, sm: 480, md: 768, lg: 1025, xl: 1440, xxl: 1600 },
        responsive: {
          breakpoints: {
            mobile: {
              label: "Celular em modo retrato",
              value: 767,
              default_value: 767,
              direction: "max",
              is_enabled: true,
            },
            mobile_extra: {
              label: "Celular em modo paisagem",
              value: 880,
              default_value: 880,
              direction: "max",
              is_enabled: false,
            },
            tablet: {
              label: "Tablet Portrait",
              value: 1024,
              default_value: 1024,
              direction: "max",
              is_enabled: true,
            },
            tablet_extra: {
              label: "Tablet Landscape",
              value: 1200,
              default_value: 1200,
              direction: "max",
              is_enabled: false,
            },
            laptop: {
              label: "Laptop",
              value: 1366,
              default_value: 1366,
              direction: "max",
              is_enabled: false,
            },
            widescreen: {
              label: "Widescreen",
              value: 2400,
              default_value: 2400,
              direction: "min",
              is_enabled: false,
            },
          },
        },
        version: "3.13.4",
        is_static: false,
        experimentalFeatures: {
          e_dom_optimization: true,
          a11y_improvements: true,
          additional_custom_breakpoints: true,
          theme_builder_v2: true,
          "landing-pages": true,
          "page-transitions": true,
          notes: true,
          loop: true,
          "form-submissions": true,
          e_scroll_snap: true,
        },
        urls: {
          assets:
            "https:\/\/conquistesuavaga.com\/wp-content\/plugins\/elementor\/assets\/",
        },
        swiperClass: "swiper-container",
        settings: { page: [], editorPreferences: [] },
        kit: {
          body_background_background: "classic",
          active_breakpoints: ["viewport_mobile", "viewport_tablet"],
          global_image_lightbox: "yes",
          lightbox_enable_counter: "yes",
          lightbox_enable_fullscreen: "yes",
          lightbox_enable_zoom: "yes",
          lightbox_enable_share: "yes",
          lightbox_title_src: "title",
          lightbox_description_src: "description",
        },
        post: {
          id: 512,
          title: "Em%20breve%20-%20Conquiste%20sua%20vaga",
          excerpt: "",
          featuredImage: false,
        },
      };
    </script>
    <script
      src="https://conquistesuavaga.com/wp-content/plugins/elementor/assets/js/frontend.min.js?ver=3.13.4"
      id="elementor-frontend-js"
    ></script>
    <script id="elementor-frontend-js-after">
      window.scope_array = [];
      window.backend = 0;
      jQuery.cachedScript = function (url, options) {
        // Allow user to set any option except for dataType, cache, and url.
        options = jQuery.extend(options || {}, {
          dataType: "script",
          cache: true,
          url: url,
        });
        // Return the jqXHR object so we can chain callbacks.
        return jQuery.ajax(options);
      };
      jQuery(window).on("elementor/frontend/init", function () {
        elementorFrontend.hooks.addAction(
          "frontend/element_ready/global",
          function ($scope, $) {
            if ("undefined" == typeof $scope) {
              return;
            }
            if ($scope.hasClass("uael-particle-yes")) {
              window.scope_array.push($scope);
              $scope.find(".uael-particle-wrapper").addClass("js-is-enabled");
            } else {
              return;
            }
            if (
              elementorFrontend.isEditMode() &&
              $scope.find(".uael-particle-wrapper").hasClass("js-is-enabled") &&
              window.backend == 0
            ) {
              var uael_url = uael_particles_script.uael_particles_url;

              jQuery.cachedScript(uael_url);
              window.backend = 1;
            } else if (elementorFrontend.isEditMode()) {
              var uael_url = uael_particles_script.uael_particles_url;
              jQuery.cachedScript(uael_url).done(function () {
                var flag = true;
              });
            }
          }
        );
      });
      jQuery(document).on("ready elementor/popup/show", () => {
        if (jQuery.find(".uael-particle-yes").length < 1) {
          return;
        }
        var uael_url = uael_particles_script.uael_particles_url;
        jQuery.cachedScript = function (url, options) {
          // Allow user to set any option except for dataType, cache, and url.
          options = jQuery.extend(options || {}, {
            dataType: "script",
            cache: true,
            url: url,
          });
          // Return the jqXHR object so we can chain callbacks.
          return jQuery.ajax(options);
        };
        jQuery.cachedScript(uael_url);
      });
    </script>
    <script
      src="https://conquistesuavaga.com/wp-content/plugins/elementor-pro/assets/js/preloaded-elements-handlers.min.js?ver=3.13.2"
      id="pro-preloaded-elements-handlers-js"
    ></script>
    <script
      src="https://conquistesuavaga.com/wp-content/plugins/elementor/assets/js/preloaded-modules.min.js?ver=3.13.4"
      id="preloaded-modules-js"
    ></script>
    <script
      src="https://conquistesuavaga.com/wp-content/plugins/elementor-pro/assets/lib/sticky/jquery.sticky.min.js?ver=3.13.2"
      id="e-sticky-js"
    ></script>
		<?php

		?>
  </body>
</html>
