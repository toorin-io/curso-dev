<!DOCTYPE html>
<html lang="pt-BR" prefix="og: https://ogp.me/ns#">
  <head>
		<meta charset="UTF-8" />
		<title>Descubra os 3 passos para ser o dev desejado pelo mercado!</title>
		<?php
			include("chunks/head/tags-head.php");
			
			include("chunks/head/meta-aula.php");
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
      href="https://conquistesuavaga.com/wp-content/plugins/ultimate-elementor/assets/min-css/uael-frontend.min.css?ver=1.36.17"
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
      id="elementor-post-1862-css"
      href="https://conquistesuavaga.com/wp-content/uploads/elementor/css/post-1862.css?ver=1685813856"
      media="all"
    />
    <link
      rel="stylesheet"
      id="google-fonts-1-css"
      href="https://fonts.googleapis.com/css?family=Raleway%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7COpen+Sans%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=auto&#038;ver=6.2.2"
      media="all"
    />
    <link
      rel="stylesheet"
      id="elementor-icons-shared-0-css"
      href="https://conquistesuavaga.com/wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min.css?ver=5.15.3"
      media="all"
    />
    <link
      rel="stylesheet"
      id="elementor-icons-fa-solid-css"
      href="https://conquistesuavaga.com/wp-content/plugins/elementor/assets/lib/font-awesome/css/solid.min.css?ver=5.15.3"
      media="all"
    />
    <link
      rel="stylesheet"
      id="elementor-icons-fa-regular-css"
      href="https://conquistesuavaga.com/wp-content/plugins/elementor/assets/lib/font-awesome/css/regular.min.css?ver=5.15.3"
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
    class="page-template page-template-elementor_canvas page page-id-1862 wp-custom-logo elementor-default elementor-template-canvas elementor-kit-5 elementor-page elementor-page-1862"
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
      data-elementor-id="1862"
      class="elementor elementor-1862"
    >
      <section
        class="elementor-section elementor-top-section elementor-element elementor-element-7b7dca55 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="7b7dca55"
        data-element_type="section"
      >
        <div class="elementor-container elementor-column-gap-default">
          <div
            class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-7721d7aa"
            data-id="7721d7aa"
            data-element_type="column"
            data-settings='{"background_background":"classic"}'
          >
            <div class="elementor-widget-wrap elementor-element-populated">
              <div
                class="elementor-element elementor-element-6c1e6641 elementor-hidden-mobile elementor-widget elementor-widget-image"
                data-id="6c1e6641"
                data-element_type="widget"
                data-widget_type="image.default"
              >
                <div class="elementor-widget-container">
                  <img
                    decoding="async"
                    width="502"
                    height="502"
                    src="https://conquistesuavaga.com/wp-content/uploads/2022/04/img1.jpg"
                    class="attachment-large size-large wp-image-1838"
                    alt=""
                    loading="lazy"
                    srcset="
                      https://conquistesuavaga.com/wp-content/uploads/2022/04/img1.jpg         502w,
                      https://conquistesuavaga.com/wp-content/uploads/2022/04/img1-300x300.jpg 300w,
                      https://conquistesuavaga.com/wp-content/uploads/2022/04/img1-150x150.jpg 150w
                    "
                    sizes="(max-width: 502px) 100vw, 502px"
                  />
                </div>
              </div>
            </div>
          </div>
          <div
            class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-2e6ee52f"
            data-id="2e6ee52f"
            data-element_type="column"
            data-settings='{"background_background":"classic"}'
          >
            <div class="elementor-widget-wrap elementor-element-populated">
              <section
                class="elementor-section elementor-inner-section elementor-element elementor-element-758adc1c elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="758adc1c"
                data-element_type="section"
              >
                <div class="elementor-container elementor-column-gap-default">
                  <div
                    class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-6f88966c"
                    data-id="6f88966c"
                    data-element_type="column"
                  >
                    <div
                      class="elementor-widget-wrap elementor-element-populated"
                    >
                      <div
                        class="elementor-element elementor-element-6c21251f elementor-widget elementor-widget-heading"
                        data-id="6c21251f"
                        data-element_type="widget"
                        id="headline"
                        data-settings='{"_animation":"none"}'
                        data-widget_type="heading.default"
                      >
                        <div class="elementor-widget-container">
                          <h1
                            class="elementor-heading-title elementor-size-default"
                          >
                            Vire Dev em 3 passos, mesmo sem
                            ter experiência na area!
                          </h1>
                        </div>
                      </div>
                      <div
                        class="elementor-element elementor-element-3ec47f0e elementor-widget elementor-widget-text-editor"
                        data-id="3ec47f0e"
                        data-element_type="widget"
                        data-widget_type="text-editor.default"
                      >
                        <div class="elementor-widget-container">
                          <p>
                            <strong>Inscreva-se</strong> para assistir à
                            <strong>aula gratuita</strong>!
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              <section
                class="elementor-section elementor-inner-section elementor-element elementor-element-1fe90f0c elementor-hidden-desktop elementor-hidden-tablet elementor-hidden-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="1fe90f0c"
                data-element_type="section"
              >
                <div class="elementor-container elementor-column-gap-default">
                  <div
                    class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-43e30ce2"
                    data-id="43e30ce2"
                    data-element_type="column"
                  >
                    <div
                      class="elementor-widget-wrap elementor-element-populated"
                    >
                      <div
                        class="elementor-element elementor-element-2bdec4b3 elementor-view-default elementor-widget elementor-widget-icon"
                        data-id="2bdec4b3"
                        data-element_type="widget"
                        data-widget_type="icon.default"
                      >
                        <div class="elementor-widget-container">
                          <div class="elementor-icon-wrapper">
                            <div class="elementor-icon">
                              <i
                                aria-hidden="true"
                                class="fas fa-arrow-down"
                              ></i>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div
                    class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-16991b22"
                    data-id="16991b22"
                    data-element_type="column"
                  >
                    <div
                      class="elementor-widget-wrap elementor-element-populated"
                    >
                      <div
                        class="elementor-element elementor-element-dcfd17 elementor-view-default elementor-widget elementor-widget-icon"
                        data-id="dcfd17"
                        data-element_type="widget"
                        data-widget_type="icon.default"
                      >
                        <div class="elementor-widget-container">
                          <div class="elementor-icon-wrapper">
                            <div class="elementor-icon">
                              <i
                                aria-hidden="true"
                                class="fas fa-arrow-down"
                              ></i>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div
                    class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-3c8cdcc5"
                    data-id="3c8cdcc5"
                    data-element_type="column"
                  >
                    <div
                      class="elementor-widget-wrap elementor-element-populated"
                    >
                      <div
                        class="elementor-element elementor-element-7b7243e6 elementor-view-default elementor-widget elementor-widget-icon"
                        data-id="7b7243e6"
                        data-element_type="widget"
                        data-widget_type="icon.default"
                      >
                        <div class="elementor-widget-container">
                          <div class="elementor-icon-wrapper">
                            <div class="elementor-icon">
                              <i
                                aria-hidden="true"
                                class="fas fa-arrow-down"
                              ></i>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              <div
                class="elementor-element elementor-element-7d15701 elementor-button-align-end elementor-mobile-button-align-center elementor-widget elementor-widget-form"
                data-id="7d15701"
                data-element_type="widget"
                data-settings='{"button_width":"70","step_next_label":"Pr\u00f3ximo","step_previous_label":"Anterior","step_type":"number_text","step_icon_shape":"circle"}'
                data-widget_type="form.default"
              >
                <div
                  class="elementor-widget-container"
                  style="max-width: 580px; margin-inline: auto"
                >
                  <?php
										include("chunks/body/ac-form-aula-campanha.php");
									?>
                </div>
              </div>
              <section
                class="elementor-section elementor-inner-section elementor-element elementor-element-f7d8b3d elementor-hidden-desktop elementor-hidden-tablet elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="f7d8b3d"
                data-element_type="section"
              >
                <div class="elementor-container elementor-column-gap-default">
                  <div
                    class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-985877c"
                    data-id="985877c"
                    data-element_type="column"
                  >
                    <div class="elementor-widget-wrap"></div>
                  </div>
                </div>
              </section>
            </div>
          </div>
        </div>
      </section>
      <section
        class="elementor-section elementor-top-section elementor-element elementor-element-fc50aeb elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="fc50aeb"
        data-element_type="section"
      >
        <div class="elementor-container elementor-column-gap-default">
          <div
            class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-e3fcd08"
            data-id="e3fcd08"
            data-element_type="column"
            data-settings='{"background_background":"classic"}'
          >
            <div class="elementor-widget-wrap elementor-element-populated">
              <div
                class="elementor-element elementor-element-5abc5214 elementor-widget elementor-widget-image"
                data-id="5abc5214"
                data-element_type="widget"
                data-widget_type="image.default"
              >
                <div class="elementor-widget-container">
                  <img
                    decoding="async"
                    width="502"
                    height="502"
                    src="https://conquistesuavaga.com/wp-content/uploads/2022/04/img2.jpg"
                    class="attachment-large size-large wp-image-1839"
                    alt=""
                    loading="lazy"
                    srcset="
                      https://conquistesuavaga.com/wp-content/uploads/2022/04/img2.jpg         502w,
                      https://conquistesuavaga.com/wp-content/uploads/2022/04/img2-300x300.jpg 300w,
                      https://conquistesuavaga.com/wp-content/uploads/2022/04/img2-150x150.jpg 150w
                    "
                    sizes="(max-width: 502px) 100vw, 502px"
                  />
                </div>
              </div>
            </div>
          </div>
          <div
            class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-22e1bc81"
            data-id="22e1bc81"
            data-element_type="column"
            data-settings='{"background_background":"classic"}'
          >
            <div class="elementor-widget-wrap elementor-element-populated">
              <section
                class="elementor-section elementor-inner-section elementor-element elementor-element-31f7d3b4 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="31f7d3b4"
                data-element_type="section"
              >
                <div class="elementor-container elementor-column-gap-default">
                  <div
                    class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-46166909"
                    data-id="46166909"
                    data-element_type="column"
                  >
                    <div
                      class="elementor-widget-wrap elementor-element-populated"
                    >
                      <div
                        class="elementor-element elementor-element-14f1f1b elementor-widget elementor-widget-heading"
                        data-id="14f1f1b"
                        data-element_type="widget"
                        data-settings='{"_animation":"none"}'
                        data-widget_type="heading.default"
                      >
                        <div class="elementor-widget-container">
                          <h2
                            class="elementor-heading-title elementor-size-default"
                          >
                            Tem muita vaga para dev
                          </h2>
                        </div>
                      </div>
                      <div
                        class="elementor-element elementor-element-15fd61a8 elementor-widget elementor-widget-text-editor"
                        data-id="15fd61a8"
                        data-element_type="widget"
                        data-widget_type="text-editor.default"
                      >
                        <div class="elementor-widget-container">
                          <p>
                            <strong>Milhares de empresas</strong> no Brasil e no
                            mundo
                            <strong>precisam contratar desenvolvedores</strong>.
                          </p>
                          <p> </p>
                          <p>
                            Como mudar de carreira e
                            <strong
                              >se tornar um dev desejado pelas empresas</strong
                            >?
                          </p>
                          <p> </p>
                          <p>
                            Isso é exatamente o que
                            <strong>você vai aprender nesta aula</strong>.
                          </p>
                        </div>
                      </div>
                      <div
                        class="elementor-element elementor-element-1e9e7c75 elementor-mobile-align-justify elementor-align-center elementor-widget elementor-widget-button"
                        data-id="1e9e7c75"
                        data-element_type="widget"
                        data-widget_type="button.default"
                      >
                        <div class="elementor-widget-container">
                          <div class="elementor-button-wrapper">
                            <a
                              href="#headline"
                              class="elementor-button-link elementor-button elementor-size-sm elementor-animation-buzz-out"
                              role="button"
                            >
                              <span class="elementor-button-content-wrapper">
                                <span class="elementor-button-text"
                                  >Quero assistir à aula</span
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
        class="elementor-section elementor-top-section elementor-element elementor-element-48ee1668 elementor-hidden-mobile elementor-hidden-desktop elementor-hidden-tablet elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="48ee1668"
        data-element_type="section"
      >
        <div class="elementor-container elementor-column-gap-default">
          <div
            class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-2c1d41f7"
            data-id="2c1d41f7"
            data-element_type="column"
            data-settings='{"background_background":"classic"}'
          >
            <div class="elementor-widget-wrap elementor-element-populated">
              <div
                class="elementor-element elementor-element-49db120c elementor-widget elementor-widget-image"
                data-id="49db120c"
                data-element_type="widget"
                data-widget_type="image.default"
              >
                <div class="elementor-widget-container">
                  <img
                    decoding="async"
                    width="502"
                    height="502"
                    src="https://conquistesuavaga.com/wp-content/uploads/2022/04/img3.jpg"
                    class="attachment-large size-large wp-image-1840"
                    alt=""
                    loading="lazy"
                    srcset="
                      https://conquistesuavaga.com/wp-content/uploads/2022/04/img3.jpg         502w,
                      https://conquistesuavaga.com/wp-content/uploads/2022/04/img3-300x300.jpg 300w,
                      https://conquistesuavaga.com/wp-content/uploads/2022/04/img3-150x150.jpg 150w
                    "
                    sizes="(max-width: 502px) 100vw, 502px"
                  />
                </div>
              </div>
            </div>
          </div>
          <div
            class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-2852613e"
            data-id="2852613e"
            data-element_type="column"
            data-settings='{"background_background":"classic"}'
          >
            <div class="elementor-widget-wrap elementor-element-populated">
              <section
                class="elementor-section elementor-inner-section elementor-element elementor-element-1063deb0 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="1063deb0"
                data-element_type="section"
              >
                <div class="elementor-container elementor-column-gap-default">
                  <div
                    class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-6ec8ed65"
                    data-id="6ec8ed65"
                    data-element_type="column"
                  >
                    <div
                      class="elementor-widget-wrap elementor-element-populated"
                    >
                      <div
                        class="elementor-element elementor-element-3092015 elementor-widget elementor-widget-heading"
                        data-id="3092015"
                        data-element_type="widget"
                        data-settings='{"_animation":"none"}'
                        data-widget_type="heading.default"
                      >
                        <div class="elementor-widget-container">
                          <h2
                            class="elementor-heading-title elementor-size-default"
                          >
                            Como funciona o jogo da contratação?
                          </h2>
                        </div>
                      </div>
                      <div
                        class="elementor-element elementor-element-726ee429 elementor-widget elementor-widget-text-editor"
                        data-id="726ee429"
                        data-element_type="widget"
                        data-widget_type="text-editor.default"
                      >
                        <div class="elementor-widget-container">
                          <p>
                            É um jogo onde o mais importante não é o quanto você
                            sabe.
                          </p>
                          <p> </p>
                          <p>
                            O que importa mesmo é
                            <strong
                              >demonstrar sua capacidade de aprender</strong
                            >
                            e <strong>ajudar as empresas</strong>.
                          </p>
                          <p> </p>
                          <p>
                            Isso é exatamente o que
                            <strong>você vai aprender a fazer nesta aula</strong
                            >.
                          </p>
                        </div>
                      </div>
                      <div
                        class="elementor-element elementor-element-7ccabad1 elementor-mobile-align-justify elementor-align-center elementor-widget elementor-widget-button"
                        data-id="7ccabad1"
                        data-element_type="widget"
                        data-widget_type="button.default"
                      >
                        <div class="elementor-widget-container">
                          <div class="elementor-button-wrapper">
                            <a
                              href="#headline"
                              class="elementor-button-link elementor-button elementor-size-sm elementor-animation-buzz-out"
                              role="button"
                            >
                              <span class="elementor-button-content-wrapper">
                                <span class="elementor-button-text"
                                  >Quero assistir à aula</span
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
        class="elementor-section elementor-top-section elementor-element elementor-element-b6628b2 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="b6628b2"
        data-element_type="section"
      >
        <div class="elementor-container elementor-column-gap-default">
          <div
            class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-258f405d"
            data-id="258f405d"
            data-element_type="column"
            data-settings='{"background_background":"classic"}'
          >
            <div class="elementor-widget-wrap elementor-element-populated">
              <div
                class="elementor-element elementor-element-3ec1c6a elementor-widget elementor-widget-image"
                data-id="3ec1c6a"
                data-element_type="widget"
                data-widget_type="image.default"
              >
                <div class="elementor-widget-container">
                  <img
                    decoding="async"
                    width="502"
                    height="502"
                    src="https://conquistesuavaga.com/wp-content/uploads/2022/04/img4.jpg"
                    class="attachment-large size-large wp-image-1841"
                    alt=""
                    loading="lazy"
                    srcset="
                      https://conquistesuavaga.com/wp-content/uploads/2022/04/img4.jpg         502w,
                      https://conquistesuavaga.com/wp-content/uploads/2022/04/img4-300x300.jpg 300w,
                      https://conquistesuavaga.com/wp-content/uploads/2022/04/img4-150x150.jpg 150w
                    "
                    sizes="(max-width: 502px) 100vw, 502px"
                  />
                </div>
              </div>
            </div>
          </div>
          <div
            class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-6766cd81"
            data-id="6766cd81"
            data-element_type="column"
            data-settings='{"background_background":"classic"}'
          >
            <div class="elementor-widget-wrap elementor-element-populated">
              <section
                class="elementor-section elementor-inner-section elementor-element elementor-element-30d36e2a elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="30d36e2a"
                data-element_type="section"
              >
                <div class="elementor-container elementor-column-gap-default">
                  <div
                    class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-454737fb"
                    data-id="454737fb"
                    data-element_type="column"
                  >
                    <div
                      class="elementor-widget-wrap elementor-element-populated"
                    >
                      <div
                        class="elementor-element elementor-element-6b0620da elementor-widget elementor-widget-heading"
                        data-id="6b0620da"
                        data-element_type="widget"
                        data-settings='{"_animation":"none"}'
                        data-widget_type="heading.default"
                      >
                        <div class="elementor-widget-container">
                          <h2
                            class="elementor-heading-title elementor-size-default"
                          >
                            Potencial conta mais que preparo
                          </h2>
                        </div>
                      </div>
                      <div
                        class="elementor-element elementor-element-660f2177 elementor-widget elementor-widget-text-editor"
                        data-id="660f2177"
                        data-element_type="widget"
                        data-widget_type="text-editor.default"
                      >
                        <div class="elementor-widget-container">
                          <p>
                            A maioria das pessoas acha que
                            <strong>ainda não está pronta</strong>.
                          </p>
                          <p> </p>
                          <p>
                            Precisa estudar mais uma <strong>linguagem</strong>.
                          </p>
                          <p> </p>
                          <p>
                            Precisa dominar aquele
                            <strong><em>framework</em></strong> que está em
                            alta.
                          </p>
                          <p> </p>
                          <p>
                            Conhecimento técnico é importante. Estudar é
                            fundamental.
                          </p>
                          <p> </p>
                          <p>
                            Porém
                            <strong
                              >nenhuma empresa espera que você chegue
                              pronto</strong
                            >.
                          </p>
                          <p> </p>
                          <p>
                            As empresas sabem que
                            <strong>precisarão te treinar</strong> hoje e
                            sempre. A tecnologia vive mudando.
                          </p>
                          <p> </p>
                          <p>
                            As empresas estão
                            <strong>prontas para investir em você</strong> desde
                            que você
                            <strong>saiba demonstrar o seu potencial</strong>.
                          </p>
                        </div>
                      </div>
                      <div
                        class="elementor-element elementor-element-6c1e854e elementor-mobile-align-justify elementor-align-center elementor-widget elementor-widget-button"
                        data-id="6c1e854e"
                        data-element_type="widget"
                        data-widget_type="button.default"
                      >
                        <div class="elementor-widget-container">
                          <div class="elementor-button-wrapper">
                            <a
                              href="#headline"
                              class="elementor-button-link elementor-button elementor-size-sm elementor-animation-buzz-out"
                              role="button"
                            >
                              <span class="elementor-button-content-wrapper">
                                <span class="elementor-button-text"
                                  >Quero assistir à aula</span
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
        class="elementor-section elementor-top-section elementor-element elementor-element-36dcf1bd elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="36dcf1bd"
        data-element_type="section"
      >
        <div class="elementor-container elementor-column-gap-default">
          <div
            class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-7e6b0c2d"
            data-id="7e6b0c2d"
            data-element_type="column"
            data-settings='{"background_background":"classic"}'
          >
            <div class="elementor-widget-wrap elementor-element-populated">
              <div
                class="elementor-element elementor-element-7e49e73 elementor-widget elementor-widget-image"
                data-id="7e49e73"
                data-element_type="widget"
                data-widget_type="image.default"
              >
                <div class="elementor-widget-container">
                  <img
                    decoding="async"
                    width="502"
                    height="502"
                    src="https://conquistesuavaga.com/wp-content/uploads/2022/04/img5.jpg"
                    class="attachment-large size-large wp-image-1842"
                    alt=""
                    loading="lazy"
                    srcset="
                      https://conquistesuavaga.com/wp-content/uploads/2022/04/img5.jpg         502w,
                      https://conquistesuavaga.com/wp-content/uploads/2022/04/img5-300x300.jpg 300w,
                      https://conquistesuavaga.com/wp-content/uploads/2022/04/img5-150x150.jpg 150w
                    "
                    sizes="(max-width: 502px) 100vw, 502px"
                  />
                </div>
              </div>
            </div>
          </div>
          <div
            class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-6134e314"
            data-id="6134e314"
            data-element_type="column"
            data-settings='{"background_background":"classic"}'
          >
            <div class="elementor-widget-wrap elementor-element-populated">
              <section
                class="elementor-section elementor-inner-section elementor-element elementor-element-746170b9 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="746170b9"
                data-element_type="section"
              >
                <div class="elementor-container elementor-column-gap-default">
                  <div
                    class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-ac3cd96"
                    data-id="ac3cd96"
                    data-element_type="column"
                  >
                    <div
                      class="elementor-widget-wrap elementor-element-populated"
                    >
                      <div
                        class="elementor-element elementor-element-45d16a09 elementor-widget elementor-widget-heading"
                        data-id="45d16a09"
                        data-element_type="widget"
                        data-settings='{"_animation":"none"}'
                        data-widget_type="heading.default"
                      >
                        <div class="elementor-widget-container">
                          <h2
                            class="elementor-heading-title elementor-size-default"
                          >
                            Como os recrutadores avaliam você
                          </h2>
                        </div>
                      </div>
                      <div
                        class="elementor-element elementor-element-a13809d elementor-widget elementor-widget-text-editor"
                        data-id="a13809d"
                        data-element_type="widget"
                        data-widget_type="text-editor.default"
                      >
                        <div class="elementor-widget-container">
                          <p>
                            A maioria dos candidatos se perde no jogo da
                            contratação porque
                            <strong
                              >não faz ideia do que os recrutadores
                              avaliam</strong
                            >.
                          </p>
                          <p> </p>
                          <p>
                            Para vencer neste jogo e
                            <strong>conquistar sua vaga</strong>, você precisa
                            saber como
                            <strong
                              >atrair e convencer os recrutadores da forma
                              certa</strong
                            >.
                          </p>
                          <p> </p>
                          <p>
                            Eles precisam <strong>te achar</strong> e <strong
                              >enxergar o seu potencial</strong
                            >.
                          </p>
                          <p> </p>
                          <p>
                            Você pode e deve ajudá-los. Existe uma
                            <strong>forma eficaz</strong> de fazer isso. Você
                            vai aprendê-la nesta aula.
                          </p>
                        </div>
                      </div>
                      <div
                        class="elementor-element elementor-element-770e6e2f elementor-mobile-align-justify elementor-align-center elementor-widget elementor-widget-button"
                        data-id="770e6e2f"
                        data-element_type="widget"
                        data-widget_type="button.default"
                      >
                        <div class="elementor-widget-container">
                          <div class="elementor-button-wrapper">
                            <a
                              href="#headline"
                              class="elementor-button-link elementor-button elementor-size-sm elementor-animation-buzz-out"
                              role="button"
                            >
                              <span class="elementor-button-content-wrapper">
                                <span class="elementor-button-text"
                                  >Quero assistir à aula</span
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
        class="elementor-section elementor-top-section elementor-element elementor-element-3f0c0aa1 elementor-hidden-mobile elementor-hidden-desktop elementor-hidden-tablet elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="3f0c0aa1"
        data-element_type="section"
      >
        <div class="elementor-container elementor-column-gap-default">
          <div
            class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-6547fe45"
            data-id="6547fe45"
            data-element_type="column"
            data-settings='{"background_background":"classic"}'
          >
            <div class="elementor-widget-wrap elementor-element-populated">
              <div
                class="elementor-element elementor-element-6e5f2794 elementor-widget elementor-widget-image"
                data-id="6e5f2794"
                data-element_type="widget"
                data-widget_type="image.default"
              >
                <div class="elementor-widget-container">
                  <img
                    decoding="async"
                    width="502"
                    height="502"
                    src="https://conquistesuavaga.com/wp-content/uploads/2022/04/img6.jpg"
                    class="attachment-large size-large wp-image-1843"
                    alt=""
                    loading="lazy"
                    srcset="
                      https://conquistesuavaga.com/wp-content/uploads/2022/04/img6.jpg         502w,
                      https://conquistesuavaga.com/wp-content/uploads/2022/04/img6-300x300.jpg 300w,
                      https://conquistesuavaga.com/wp-content/uploads/2022/04/img6-150x150.jpg 150w
                    "
                    sizes="(max-width: 502px) 100vw, 502px"
                  />
                </div>
              </div>
            </div>
          </div>
          <div
            class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-50fa7970"
            data-id="50fa7970"
            data-element_type="column"
            data-settings='{"background_background":"classic"}'
          >
            <div class="elementor-widget-wrap elementor-element-populated">
              <section
                class="elementor-section elementor-inner-section elementor-element elementor-element-e72303b elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="e72303b"
                data-element_type="section"
              >
                <div class="elementor-container elementor-column-gap-default">
                  <div
                    class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-32889b2d"
                    data-id="32889b2d"
                    data-element_type="column"
                  >
                    <div
                      class="elementor-widget-wrap elementor-element-populated"
                    >
                      <div
                        class="elementor-element elementor-element-526aeb51 elementor-widget elementor-widget-heading"
                        data-id="526aeb51"
                        data-element_type="widget"
                        data-settings='{"_animation":"none"}'
                        data-widget_type="heading.default"
                      >
                        <div class="elementor-widget-container">
                          <h2
                            class="elementor-heading-title elementor-size-default"
                          >
                            Seu currículo é do tipo "mais do mesmo"?
                          </h2>
                        </div>
                      </div>
                      <div
                        class="elementor-element elementor-element-1b112c3e elementor-widget elementor-widget-text-editor"
                        data-id="1b112c3e"
                        data-element_type="widget"
                        data-widget_type="text-editor.default"
                      >
                        <div class="elementor-widget-container">
                          <p>
                            Dizem que a primeira impressão é a que fica, não é?
                          </p>
                          <p> </p>
                          <p>No jogo da contratação, essa é a pura verdade.</p>
                          <p> </p>
                          <p>
                            <strong
                              >Seu currículo pode destruir suas chances em
                              poucos segundos ou te colocar à frente dos demais
                              candidatos</strong
                            >.
                          </p>
                          <p> </p>
                          <p>
                            Criar um currículo que faz você
                            <strong>se destacar</strong> é mais fácil do que
                            você imagina.
                          </p>
                          <p> </p>
                          <p>
                            Essa precisa ser uma das suas primeiras providências
                            se quiser vencer o jogo da contratação.
                          </p>
                        </div>
                      </div>
                      <div
                        class="elementor-element elementor-element-457fa340 elementor-mobile-align-justify elementor-align-center elementor-widget elementor-widget-button"
                        data-id="457fa340"
                        data-element_type="widget"
                        data-widget_type="button.default"
                      >
                        <div class="elementor-widget-container">
                          <div class="elementor-button-wrapper">
                            <a
                              href="#headline"
                              class="elementor-button-link elementor-button elementor-size-sm elementor-animation-buzz-out"
                              role="button"
                            >
                              <span class="elementor-button-content-wrapper">
                                <span class="elementor-button-text"
                                  >Quero assistir à aula</span
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
        class="elementor-section elementor-top-section elementor-element elementor-element-57eaae92 elementor-hidden-mobile elementor-hidden-desktop elementor-hidden-tablet elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="57eaae92"
        data-element_type="section"
      >
        <div class="elementor-container elementor-column-gap-default">
          <div
            class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-69d68357"
            data-id="69d68357"
            data-element_type="column"
            data-settings='{"background_background":"classic"}'
          >
            <div class="elementor-widget-wrap elementor-element-populated">
              <div
                class="elementor-element elementor-element-4871ceb elementor-widget elementor-widget-image"
                data-id="4871ceb"
                data-element_type="widget"
                data-widget_type="image.default"
              >
                <div class="elementor-widget-container">
                  <img
                    decoding="async"
                    width="502"
                    height="502"
                    src="https://conquistesuavaga.com/wp-content/uploads/2022/04/img7.jpg"
                    class="attachment-large size-large wp-image-1844"
                    alt=""
                    loading="lazy"
                    srcset="
                      https://conquistesuavaga.com/wp-content/uploads/2022/04/img7.jpg         502w,
                      https://conquistesuavaga.com/wp-content/uploads/2022/04/img7-300x300.jpg 300w,
                      https://conquistesuavaga.com/wp-content/uploads/2022/04/img7-150x150.jpg 150w
                    "
                    sizes="(max-width: 502px) 100vw, 502px"
                  />
                </div>
              </div>
            </div>
          </div>
          <div
            class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-59f24400"
            data-id="59f24400"
            data-element_type="column"
            data-settings='{"background_background":"classic"}'
          >
            <div class="elementor-widget-wrap elementor-element-populated">
              <section
                class="elementor-section elementor-inner-section elementor-element elementor-element-2b1a0d02 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="2b1a0d02"
                data-element_type="section"
              >
                <div class="elementor-container elementor-column-gap-default">
                  <div
                    class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-3437b420"
                    data-id="3437b420"
                    data-element_type="column"
                  >
                    <div
                      class="elementor-widget-wrap elementor-element-populated"
                    >
                      <div
                        class="elementor-element elementor-element-26b469f1 elementor-widget elementor-widget-heading"
                        data-id="26b469f1"
                        data-element_type="widget"
                        data-settings='{"_animation":"none"}'
                        data-widget_type="heading.default"
                      >
                        <div class="elementor-widget-container">
                          <h2
                            class="elementor-heading-title elementor-size-default"
                          >
                            Está preparado para as entrevistas?
                          </h2>
                        </div>
                      </div>
                      <div
                        class="elementor-element elementor-element-15e6afe7 elementor-widget elementor-widget-text-editor"
                        data-id="15e6afe7"
                        data-element_type="widget"
                        data-widget_type="text-editor.default"
                      >
                        <div class="elementor-widget-container">
                          <p>Você sua frio só de pensar na entrevista?</p>
                          <p> </p>
                          <p>Não precisa ser assim.</p>
                          <p> </p>
                          <p>
                            <strong
                              >Com a preparação certa, você pode encantar os
                              recrutadores</strong
                            >.
                          </p>
                          <p> </p>
                          <p>Você não precisa ser uma pessoa extrovertida.</p>
                          <p> </p>
                          <p>
                            Você não precisa agir como se fosse a pessoa mais
                            popular da escola.
                          </p>
                          <p> </p>
                          <p>
                            Só precisa
                            <strong
                              >entender o que os recrutadores querem ouvir de
                              você</strong
                            >.
                          </p>
                        </div>
                      </div>
                      <div
                        class="elementor-element elementor-element-41b5d5d5 elementor-mobile-align-justify elementor-align-center elementor-widget elementor-widget-button"
                        data-id="41b5d5d5"
                        data-element_type="widget"
                        data-widget_type="button.default"
                      >
                        <div class="elementor-widget-container">
                          <div class="elementor-button-wrapper">
                            <a
                              href="#headline"
                              class="elementor-button-link elementor-button elementor-size-sm elementor-animation-buzz-out"
                              role="button"
                            >
                              <span class="elementor-button-content-wrapper">
                                <span class="elementor-button-text"
                                  >Quero assistir à aula</span
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
        class="elementor-section elementor-top-section elementor-element elementor-element-5c98f445 elementor-hidden-mobile elementor-hidden-desktop elementor-hidden-tablet elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="5c98f445"
        data-element_type="section"
      >
        <div class="elementor-container elementor-column-gap-default">
          <div
            class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-2b56e6bf"
            data-id="2b56e6bf"
            data-element_type="column"
            data-settings='{"background_background":"classic"}'
          >
            <div class="elementor-widget-wrap elementor-element-populated">
              <div
                class="elementor-element elementor-element-35d4a483 elementor-widget elementor-widget-image"
                data-id="35d4a483"
                data-element_type="widget"
                data-widget_type="image.default"
              >
                <div class="elementor-widget-container">
                  <img
                    decoding="async"
                    width="502"
                    height="502"
                    src="https://conquistesuavaga.com/wp-content/uploads/2022/04/img8.jpg"
                    class="attachment-large size-large wp-image-1845"
                    alt=""
                    loading="lazy"
                    srcset="
                      https://conquistesuavaga.com/wp-content/uploads/2022/04/img8.jpg         502w,
                      https://conquistesuavaga.com/wp-content/uploads/2022/04/img8-300x300.jpg 300w,
                      https://conquistesuavaga.com/wp-content/uploads/2022/04/img8-150x150.jpg 150w
                    "
                    sizes="(max-width: 502px) 100vw, 502px"
                  />
                </div>
              </div>
            </div>
          </div>
          <div
            class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-1797fa48"
            data-id="1797fa48"
            data-element_type="column"
            data-settings='{"background_background":"classic"}'
          >
            <div class="elementor-widget-wrap elementor-element-populated">
              <section
                class="elementor-section elementor-inner-section elementor-element elementor-element-3d3b101b elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="3d3b101b"
                data-element_type="section"
              >
                <div class="elementor-container elementor-column-gap-default">
                  <div
                    class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-667dad88"
                    data-id="667dad88"
                    data-element_type="column"
                  >
                    <div
                      class="elementor-widget-wrap elementor-element-populated"
                    >
                      <div
                        class="elementor-element elementor-element-567ff854 elementor-widget elementor-widget-heading"
                        data-id="567ff854"
                        data-element_type="widget"
                        data-settings='{"_animation":"none"}'
                        data-widget_type="heading.default"
                      >
                        <div class="elementor-widget-container">
                          <h2
                            class="elementor-heading-title elementor-size-default"
                          >
                            Está pronto para a entrevista técnica?
                          </h2>
                        </div>
                      </div>
                      <div
                        class="elementor-element elementor-element-287f5dae elementor-widget elementor-widget-text-editor"
                        data-id="287f5dae"
                        data-element_type="widget"
                        data-widget_type="text-editor.default"
                      >
                        <div class="elementor-widget-container">
                          <p>
                            É possível passar na entrevista técnica sem ter
                            experiência?
                          </p>
                          <p> </p>
                          <p>
                            É possível convencer o entrevistador, mesmo quando
                            você ainda tem pouco domínio da técnica?
                          </p>
                          <p> </p>
                          <p>
                            Por incrível que pareça, a resposta é
                            <strong>sim</strong>.
                          </p>
                          <p> </p>
                          <p>
                            <strong
                              >Quando você entende o que o entrevistador está
                              avaliando na entrevista técnica, você descobre que
                              é possível superá-la</strong
                            >.
                          </p>
                          <p> </p>
                          <p>
                            Mesmo que você esteja só começando na carreira de
                            dev, tenha pouco tempo de estudo e nenhuma
                            experiência prévia.
                          </p>
                        </div>
                      </div>
                      <div
                        class="elementor-element elementor-element-2eecb648 elementor-mobile-align-justify elementor-align-center elementor-widget elementor-widget-button"
                        data-id="2eecb648"
                        data-element_type="widget"
                        data-widget_type="button.default"
                      >
                        <div class="elementor-widget-container">
                          <div class="elementor-button-wrapper">
                            <a
                              href="#headline"
                              class="elementor-button-link elementor-button elementor-size-sm elementor-animation-buzz-out"
                              role="button"
                            >
                              <span class="elementor-button-content-wrapper">
                                <span class="elementor-button-text"
                                  >Quero assistir à aula</span
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
        class="elementor-section elementor-top-section elementor-element elementor-element-7a7ccf22 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="7a7ccf22"
        data-element_type="section"
      >
        <div class="elementor-container elementor-column-gap-default">
          <div
            class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-aa0c899"
            data-id="aa0c899"
            data-element_type="column"
            data-settings='{"background_background":"classic"}'
          >
            <div class="elementor-widget-wrap elementor-element-populated">
              <div
                class="elementor-element elementor-element-13acdc7d elementor-widget elementor-widget-image"
                data-id="13acdc7d"
                data-element_type="widget"
                data-widget_type="image.default"
              >
                <div class="elementor-widget-container">
                  <img
                    decoding="async"
                    width="502"
                    height="502"
                    src="https://conquistesuavaga.com/wp-content/uploads/2022/04/img9.jpg"
                    class="attachment-large size-large wp-image-1846"
                    alt=""
                    loading="lazy"
                    srcset="
                      https://conquistesuavaga.com/wp-content/uploads/2022/04/img9.jpg         502w,
                      https://conquistesuavaga.com/wp-content/uploads/2022/04/img9-300x300.jpg 300w,
                      https://conquistesuavaga.com/wp-content/uploads/2022/04/img9-150x150.jpg 150w
                    "
                    sizes="(max-width: 502px) 100vw, 502px"
                  />
                </div>
              </div>
            </div>
          </div>
          <div
            class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-7d9ac17"
            data-id="7d9ac17"
            data-element_type="column"
            data-settings='{"background_background":"classic"}'
          >
            <div class="elementor-widget-wrap elementor-element-populated">
              <section
                class="elementor-section elementor-inner-section elementor-element elementor-element-5b290e1c elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="5b290e1c"
                data-element_type="section"
              >
                <div class="elementor-container elementor-column-gap-default">
                  <div
                    class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-43ff0d28"
                    data-id="43ff0d28"
                    data-element_type="column"
                  >
                    <div
                      class="elementor-widget-wrap elementor-element-populated"
                    >
                      <div
                        class="elementor-element elementor-element-2656125e elementor-widget elementor-widget-heading"
                        data-id="2656125e"
                        data-element_type="widget"
                        data-settings='{"_animation":"none"}'
                        data-widget_type="heading.default"
                      >
                        <div class="elementor-widget-container">
                          <h2
                            class="elementor-heading-title elementor-size-default"
                          >
                            O que nenhuma faculdade ensina
                          </h2>
                        </div>
                      </div>
                      <div
                        class="elementor-element elementor-element-3ee9e190 elementor-widget elementor-widget-text-editor"
                        data-id="3ee9e190"
                        data-element_type="widget"
                        data-widget_type="text-editor.default"
                      >
                        <div class="elementor-widget-container">
                          <p>
                            Nesta aula, você vai aprender o que nenhuma
                            faculdade ensina:
                            <strong>como funciona o jogo da contratação</strong
                            >.
                          </p>
                          <p> </p>
                          <p>
                            A aula vai te ajudar da mesma forma que
                            <strong>ajudou o Davi</strong>.
                          </p>
                          <p> </p>
                          <p>
                            <strong
                              >Ele conquistou uma vaga em pouco tempo</strong
                            >.
                          </p>
                          <p> </p>
                          <p>
                            Bastou <strong>colocar em prática</strong> o que
                            aprendeu nesta aula.
                          </p>
                          <p> </p>
                          <p>Assista ao <strong>breve relato</strong> dele:</p>
                        </div>
                      </div>
                      <div
                        class="elementor-element elementor-element-e8ffc6c elementor-widget elementor-widget-video"
                        data-id="e8ffc6c"
                        data-element_type="widget"
                        data-settings='{"video_type":"vimeo"}'
                        data-widget_type="video.default"
                      >
                        <div class="elementor-widget-container">
                          <div class="elementor-wrapper elementor-open-inline">
                            <iframe
                              class="elementor-video-iframe"
                              allowfullscreen
                              title="Player de Vídeo vimeo"
                              src="https://player.vimeo.com/video/698417209?color&amp;autopause=0&amp;loop=0&amp;muted=0&amp;title=0&amp;portrait=0&amp;byline=0#t="
                            ></iframe>
                          </div>
                        </div>
                      </div>
                      <div
                        class="elementor-element elementor-element-7e9831ca elementor-mobile-align-justify elementor-align-center elementor-widget elementor-widget-button"
                        data-id="7e9831ca"
                        data-element_type="widget"
                        data-widget_type="button.default"
                      >
                        <div class="elementor-widget-container">
                          <div class="elementor-button-wrapper">
                            <a
                              href="#headline"
                              class="elementor-button-link elementor-button elementor-size-sm elementor-animation-buzz-out"
                              role="button"
                            >
                              <span class="elementor-button-content-wrapper">
                                <span class="elementor-button-text"
                                  >Quero assistir à aula</span
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
        class="elementor-section elementor-top-section elementor-element elementor-element-2295ce1a elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="2295ce1a"
        data-element_type="section"
      >
        <div class="elementor-container elementor-column-gap-default">
          <div
            class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-191044e0"
            data-id="191044e0"
            data-element_type="column"
            data-settings='{"background_background":"classic"}'
          >
            <div class="elementor-widget-wrap elementor-element-populated">
              <div
                class="elementor-element elementor-element-629b0fa0 elementor-widget elementor-widget-image"
                data-id="629b0fa0"
                data-element_type="widget"
                data-widget_type="image.default"
              >
                <div class="elementor-widget-container">
                  <img
                    decoding="async"
                    width="502"
                    height="502"
                    src="https://conquistesuavaga.com/wp-content/uploads/2022/04/img10.jpg"
                    class="attachment-large size-large wp-image-1848"
                    alt=""
                    loading="lazy"
                    srcset="
                      https://conquistesuavaga.com/wp-content/uploads/2022/04/img10.jpg         502w,
                      https://conquistesuavaga.com/wp-content/uploads/2022/04/img10-300x300.jpg 300w,
                      https://conquistesuavaga.com/wp-content/uploads/2022/04/img10-150x150.jpg 150w
                    "
                    sizes="(max-width: 502px) 100vw, 502px"
                  />
                </div>
              </div>
            </div>
          </div>
          <div
            class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-5355141d"
            data-id="5355141d"
            data-element_type="column"
            data-settings='{"background_background":"classic"}'
          >
            <div class="elementor-widget-wrap elementor-element-populated">
              <section
                class="elementor-section elementor-inner-section elementor-element elementor-element-17c6c3a0 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="17c6c3a0"
                data-element_type="section"
              >
                <div class="elementor-container elementor-column-gap-default">
                  <div
                    class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-37ca6930"
                    data-id="37ca6930"
                    data-element_type="column"
                  >
                    <div
                      class="elementor-widget-wrap elementor-element-populated"
                    >
                      <div
                        class="elementor-element elementor-element-e75df61 elementor-widget elementor-widget-heading"
                        data-id="e75df61"
                        data-element_type="widget"
                        data-settings='{"_animation":"none"}'
                        data-widget_type="heading.default"
                      >
                        <div class="elementor-widget-container">
                          <h2
                            class="elementor-heading-title elementor-size-default"
                          >
                            Essa aula é para você?
                          </h2>
                        </div>
                      </div>
                      <div
                        class="elementor-element elementor-element-39f5ae03 elementor-widget elementor-widget-text-editor"
                        data-id="39f5ae03"
                        data-element_type="widget"
                        data-widget_type="text-editor.default"
                      >
                        <div class="elementor-widget-container">
                          <p><strong>SIM</strong>, se você:</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              <section
                class="elementor-section elementor-inner-section elementor-element elementor-element-31487294 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="31487294"
                data-element_type="section"
              >
                <div class="elementor-container elementor-column-gap-default">
                  <div
                    class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-68c2a46"
                    data-id="68c2a46"
                    data-element_type="column"
                  >
                    <div
                      class="elementor-widget-wrap elementor-element-populated"
                    >
                      <div
                        class="elementor-element elementor-element-1e1b0272 elementor-view-default elementor-widget elementor-widget-icon"
                        data-id="1e1b0272"
                        data-element_type="widget"
                        data-widget_type="icon.default"
                      >
                        <div class="elementor-widget-container">
                          <div class="elementor-icon-wrapper">
                            <div class="elementor-icon">
                              <i aria-hidden="true" class="far fa-grimace"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div
                    class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-17cdf708"
                    data-id="17cdf708"
                    data-element_type="column"
                  >
                    <div
                      class="elementor-widget-wrap elementor-element-populated"
                    >
                      <div
                        class="elementor-element elementor-element-3809b1f1 elementor-widget elementor-widget-text-editor"
                        data-id="3809b1f1"
                        data-element_type="widget"
                        data-widget_type="text-editor.default"
                      >
                        <div class="elementor-widget-container">
                          <p>
                            Está começando na carreira de dev e todas as vagas
                            pedem <strong>experiência comprovada</strong> em
                            alguma tecnologia.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              <section
                class="elementor-section elementor-inner-section elementor-element elementor-element-64fd3d5b elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="64fd3d5b"
                data-element_type="section"
              >
                <div class="elementor-container elementor-column-gap-default">
                  <div
                    class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-7842c14e"
                    data-id="7842c14e"
                    data-element_type="column"
                  >
                    <div
                      class="elementor-widget-wrap elementor-element-populated"
                    >
                      <div
                        class="elementor-element elementor-element-632b6113 elementor-view-default elementor-widget elementor-widget-icon"
                        data-id="632b6113"
                        data-element_type="widget"
                        data-widget_type="icon.default"
                      >
                        <div class="elementor-widget-container">
                          <div class="elementor-icon-wrapper">
                            <div class="elementor-icon">
                              <i aria-hidden="true" class="far fa-flushed"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div
                    class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-384ed961"
                    data-id="384ed961"
                    data-element_type="column"
                  >
                    <div
                      class="elementor-widget-wrap elementor-element-populated"
                    >
                      <div
                        class="elementor-element elementor-element-3e6cb405 elementor-widget elementor-widget-text-editor"
                        data-id="3e6cb405"
                        data-element_type="widget"
                        data-widget_type="text-editor.default"
                      >
                        <div class="elementor-widget-container">
                          <p>
                            Sente-se preso em um loop infinito onde
                            <strong
                              >“se não tenho emprego não ganho experiência, se
                              não tenho experiência não ganho emprego”</strong
                            >.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              <section
                class="elementor-section elementor-inner-section elementor-element elementor-element-45f4d70d elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="45f4d70d"
                data-element_type="section"
              >
                <div class="elementor-container elementor-column-gap-default">
                  <div
                    class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-3ba1dd17"
                    data-id="3ba1dd17"
                    data-element_type="column"
                  >
                    <div
                      class="elementor-widget-wrap elementor-element-populated"
                    >
                      <div
                        class="elementor-element elementor-element-119379ad elementor-view-default elementor-widget elementor-widget-icon"
                        data-id="119379ad"
                        data-element_type="widget"
                        data-widget_type="icon.default"
                      >
                        <div class="elementor-widget-container">
                          <div class="elementor-icon-wrapper">
                            <div class="elementor-icon">
                              <i
                                aria-hidden="true"
                                class="far fa-grin-beam-sweat"
                              ></i>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div
                    class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-69c6f4f9"
                    data-id="69c6f4f9"
                    data-element_type="column"
                  >
                    <div
                      class="elementor-widget-wrap elementor-element-populated"
                    >
                      <div
                        class="elementor-element elementor-element-5ed75e5d elementor-widget elementor-widget-text-editor"
                        data-id="5ed75e5d"
                        data-element_type="widget"
                        data-widget_type="text-editor.default"
                      >
                        <div class="elementor-widget-container">
                          <p>
                            Cansou de enviar currículos e
                            <strong>ficar sem resposta</strong>.​
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              <section
                class="elementor-section elementor-inner-section elementor-element elementor-element-20c7e22f elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="20c7e22f"
                data-element_type="section"
              >
                <div class="elementor-container elementor-column-gap-default">
                  <div
                    class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-63d3b1e"
                    data-id="63d3b1e"
                    data-element_type="column"
                  >
                    <div
                      class="elementor-widget-wrap elementor-element-populated"
                    >
                      <div
                        class="elementor-element elementor-element-430e791d elementor-mobile-align-justify elementor-align-center elementor-widget elementor-widget-button"
                        data-id="430e791d"
                        data-element_type="widget"
                        data-widget_type="button.default"
                      >
                        <div class="elementor-widget-container">
                          <div class="elementor-button-wrapper">
                            <a
                              href="#headline"
                              class="elementor-button-link elementor-button elementor-size-sm elementor-animation-buzz-out"
                              role="button"
                            >
                              <span class="elementor-button-content-wrapper">
                                <span class="elementor-button-text"
                                  >Quero assistir à aula</span
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
        class="elementor-section elementor-top-section elementor-element elementor-element-6a2d09eb elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="6a2d09eb"
        data-element_type="section"
      >
        <div class="elementor-container elementor-column-gap-default">
          <div
            class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-5939949"
            data-id="5939949"
            data-element_type="column"
            data-settings='{"background_background":"classic"}'
          >
            <div class="elementor-widget-wrap elementor-element-populated">
              <div
                class="elementor-element elementor-element-d9666e9 elementor-widget elementor-widget-image"
                data-id="d9666e9"
                data-element_type="widget"
                data-widget_type="image.default"
              >
                <div class="elementor-widget-container">
                  <img
                    decoding="async"
                    width="502"
                    height="502"
                    src="https://conquistesuavaga.com/wp-content/uploads/2022/04/img11.jpg"
                    class="attachment-large size-large wp-image-1849"
                    alt=""
                    loading="lazy"
                    srcset="
                      https://conquistesuavaga.com/wp-content/uploads/2022/04/img11.jpg         502w,
                      https://conquistesuavaga.com/wp-content/uploads/2022/04/img11-300x300.jpg 300w,
                      https://conquistesuavaga.com/wp-content/uploads/2022/04/img11-150x150.jpg 150w
                    "
                    sizes="(max-width: 502px) 100vw, 502px"
                  />
                </div>
              </div>
            </div>
          </div>
          <div
            class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-564ee845"
            data-id="564ee845"
            data-element_type="column"
            data-settings='{"background_background":"classic"}'
          >
            <div class="elementor-widget-wrap elementor-element-populated">
              <section
                class="elementor-section elementor-inner-section elementor-element elementor-element-70d86b4f elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="70d86b4f"
                data-element_type="section"
              >
                <div class="elementor-container elementor-column-gap-default">
                  <div
                    class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-7f75a3dd"
                    data-id="7f75a3dd"
                    data-element_type="column"
                  >
                    <div
                      class="elementor-widget-wrap elementor-element-populated"
                    >
                      <div
                        class="elementor-element elementor-element-14326a85 elementor-widget elementor-widget-heading"
                        data-id="14326a85"
                        data-element_type="widget"
                        data-settings='{"_animation":"none"}'
                        data-widget_type="heading.default"
                      >
                        <div class="elementor-widget-container">
                          <h2
                            class="elementor-heading-title elementor-size-default"
                          >
                            O que estão achando dessa aula?
                          </h2>
                        </div>
                      </div>
                      <div
                        class="elementor-element elementor-element-32d8d64f elementor-widget elementor-widget-image"
                        data-id="32d8d64f"
                        data-element_type="widget"
                        data-widget_type="image.default"
                      >
                        <div class="elementor-widget-container">
                          <img
                            decoding="async"
                            width="500"
                            height="436"
                            src="https://conquistesuavaga.com/wp-content/uploads/2022/04/depoimento1-1.jpg"
                            class="attachment-large size-large wp-image-1850"
                            alt=""
                            loading="lazy"
                            srcset="
                              https://conquistesuavaga.com/wp-content/uploads/2022/04/depoimento1-1.jpg         500w,
                              https://conquistesuavaga.com/wp-content/uploads/2022/04/depoimento1-1-300x262.jpg 300w
                            "
                            sizes="(max-width: 500px) 100vw, 500px"
                          />
                        </div>
                      </div>
                      <div
                        class="elementor-element elementor-element-56315e5c elementor-widget elementor-widget-image"
                        data-id="56315e5c"
                        data-element_type="widget"
                        data-widget_type="image.default"
                      >
                        <div class="elementor-widget-container">
                          <img
                            decoding="async"
                            width="500"
                            height="561"
                            src="https://conquistesuavaga.com/wp-content/uploads/2022/04/depoimento2-1.jpg"
                            class="attachment-large size-large wp-image-1851"
                            alt=""
                            loading="lazy"
                            srcset="
                              https://conquistesuavaga.com/wp-content/uploads/2022/04/depoimento2-1.jpg         500w,
                              https://conquistesuavaga.com/wp-content/uploads/2022/04/depoimento2-1-267x300.jpg 267w
                            "
                            sizes="(max-width: 500px) 100vw, 500px"
                          />
                        </div>
                      </div>
                      <div
                        class="elementor-element elementor-element-54a3af3 elementor-widget elementor-widget-image"
                        data-id="54a3af3"
                        data-element_type="widget"
                        data-widget_type="image.default"
                      >
                        <div class="elementor-widget-container">
                          <img
                            decoding="async"
                            width="500"
                            height="561"
                            src="https://conquistesuavaga.com/wp-content/uploads/2022/04/depoimento3-1-1.jpg"
                            class="attachment-large size-large wp-image-1852"
                            alt=""
                            loading="lazy"
                            srcset="
                              https://conquistesuavaga.com/wp-content/uploads/2022/04/depoimento3-1-1.jpg         500w,
                              https://conquistesuavaga.com/wp-content/uploads/2022/04/depoimento3-1-1-267x300.jpg 267w
                            "
                            sizes="(max-width: 500px) 100vw, 500px"
                          />
                        </div>
                      </div>
                      <div
                        class="elementor-element elementor-element-7d8d1ef7 elementor-widget elementor-widget-image"
                        data-id="7d8d1ef7"
                        data-element_type="widget"
                        data-widget_type="image.default"
                      >
                        <div class="elementor-widget-container">
                          <img
                            decoding="async"
                            width="500"
                            height="762"
                            src="https://conquistesuavaga.com/wp-content/uploads/2022/04/depoimento4-1.jpg"
                            class="attachment-large size-large wp-image-1853"
                            alt=""
                            loading="lazy"
                            srcset="
                              https://conquistesuavaga.com/wp-content/uploads/2022/04/depoimento4-1.jpg         500w,
                              https://conquistesuavaga.com/wp-content/uploads/2022/04/depoimento4-1-197x300.jpg 197w
                            "
                            sizes="(max-width: 500px) 100vw, 500px"
                          />
                        </div>
                      </div>
                      <div
                        class="elementor-element elementor-element-5be4dda0 elementor-mobile-align-justify elementor-align-center elementor-widget elementor-widget-button"
                        data-id="5be4dda0"
                        data-element_type="widget"
                        data-widget_type="button.default"
                      >
                        <div class="elementor-widget-container">
                          <div class="elementor-button-wrapper">
                            <a
                              href="#headline"
                              class="elementor-button-link elementor-button elementor-size-sm elementor-animation-buzz-out"
                              role="button"
                            >
                              <span class="elementor-button-content-wrapper">
                                <span class="elementor-button-text"
                                  >Quero assistir à aula</span
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
        class="elementor-section elementor-top-section elementor-element elementor-element-a3d09ee elementor-hidden-mobile elementor-hidden-desktop elementor-hidden-tablet elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="a3d09ee"
        data-element_type="section"
      >
        <div class="elementor-container elementor-column-gap-default">
          <div
            class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-36e839a0"
            data-id="36e839a0"
            data-element_type="column"
            data-settings='{"background_background":"classic"}'
          >
            <div class="elementor-widget-wrap elementor-element-populated">
              <div
                class="elementor-element elementor-element-5d9544da elementor-widget elementor-widget-image"
                data-id="5d9544da"
                data-element_type="widget"
                data-widget_type="image.default"
              >
                <div class="elementor-widget-container">
                  <img
                    decoding="async"
                    width="502"
                    height="502"
                    src="https://conquistesuavaga.com/wp-content/uploads/2022/04/img12.jpg"
                    class="attachment-large size-large wp-image-1854"
                    alt=""
                    loading="lazy"
                    srcset="
                      https://conquistesuavaga.com/wp-content/uploads/2022/04/img12.jpg         502w,
                      https://conquistesuavaga.com/wp-content/uploads/2022/04/img12-300x300.jpg 300w,
                      https://conquistesuavaga.com/wp-content/uploads/2022/04/img12-150x150.jpg 150w
                    "
                    sizes="(max-width: 502px) 100vw, 502px"
                  />
                </div>
              </div>
            </div>
          </div>
          <div
            class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-2c0f2bfe"
            data-id="2c0f2bfe"
            data-element_type="column"
            data-settings='{"background_background":"classic"}'
          >
            <div class="elementor-widget-wrap elementor-element-populated">
              <section
                class="elementor-section elementor-inner-section elementor-element elementor-element-76058681 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="76058681"
                data-element_type="section"
              >
                <div class="elementor-container elementor-column-gap-default">
                  <div
                    class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-5c84c88a"
                    data-id="5c84c88a"
                    data-element_type="column"
                  >
                    <div
                      class="elementor-widget-wrap elementor-element-populated"
                    >
                      <div
                        class="elementor-element elementor-element-157fb135 elementor-widget elementor-widget-heading"
                        data-id="157fb135"
                        data-element_type="widget"
                        data-settings='{"_animation":"none"}'
                        data-widget_type="heading.default"
                      >
                        <div class="elementor-widget-container">
                          <h2
                            class="elementor-heading-title elementor-size-default"
                          >
                            Ao final desta aula, você vai aprender a:
                          </h2>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              <section
                class="elementor-section elementor-inner-section elementor-element elementor-element-30ae013c elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="30ae013c"
                data-element_type="section"
              >
                <div class="elementor-container elementor-column-gap-default">
                  <div
                    class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-54795cc8"
                    data-id="54795cc8"
                    data-element_type="column"
                  >
                    <div
                      class="elementor-widget-wrap elementor-element-populated"
                    >
                      <div
                        class="elementor-element elementor-element-8426ca3 elementor-view-default elementor-widget elementor-widget-icon"
                        data-id="8426ca3"
                        data-element_type="widget"
                        data-widget_type="icon.default"
                      >
                        <div class="elementor-widget-container">
                          <div class="elementor-icon-wrapper">
                            <div class="elementor-icon">
                              <i
                                aria-hidden="true"
                                class="far fa-meh-rolling-eyes"
                              ></i>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div
                    class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-714e4b62"
                    data-id="714e4b62"
                    data-element_type="column"
                  >
                    <div
                      class="elementor-widget-wrap elementor-element-populated"
                    >
                      <div
                        class="elementor-element elementor-element-4752d9a3 elementor-widget elementor-widget-text-editor"
                        data-id="4752d9a3"
                        data-element_type="widget"
                        data-widget_type="text-editor.default"
                      >
                        <div class="elementor-widget-container">
                          <p>
                            Parar de ser
                            <strong>ignorado pelos recrutadores</strong>.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              <section
                class="elementor-section elementor-inner-section elementor-element elementor-element-3091285 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="3091285"
                data-element_type="section"
              >
                <div class="elementor-container elementor-column-gap-default">
                  <div
                    class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-39d908c"
                    data-id="39d908c"
                    data-element_type="column"
                  >
                    <div
                      class="elementor-widget-wrap elementor-element-populated"
                    >
                      <div
                        class="elementor-element elementor-element-485cb63d elementor-view-default elementor-widget elementor-widget-icon"
                        data-id="485cb63d"
                        data-element_type="widget"
                        data-widget_type="icon.default"
                      >
                        <div class="elementor-widget-container">
                          <div class="elementor-icon-wrapper">
                            <div class="elementor-icon">
                              <i
                                aria-hidden="true"
                                class="far fa-grin-hearts"
                              ></i>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div
                    class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-72c82add"
                    data-id="72c82add"
                    data-element_type="column"
                  >
                    <div
                      class="elementor-widget-wrap elementor-element-populated"
                    >
                      <div
                        class="elementor-element elementor-element-4cfcf9b9 elementor-widget elementor-widget-text-editor"
                        data-id="4cfcf9b9"
                        data-element_type="widget"
                        data-widget_type="text-editor.default"
                      >
                        <div class="elementor-widget-container">
                          <p>
                            Saber <strong>como ser contratado</strong> como dev
                            <strong>sem nunca ter trabalhado na área</strong>!
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              <section
                class="elementor-section elementor-inner-section elementor-element elementor-element-72054b11 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="72054b11"
                data-element_type="section"
              >
                <div class="elementor-container elementor-column-gap-default">
                  <div
                    class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-1f903b9c"
                    data-id="1f903b9c"
                    data-element_type="column"
                  >
                    <div
                      class="elementor-widget-wrap elementor-element-populated"
                    >
                      <div
                        class="elementor-element elementor-element-18e64079 elementor-view-default elementor-widget elementor-widget-icon"
                        data-id="18e64079"
                        data-element_type="widget"
                        data-widget_type="icon.default"
                      >
                        <div class="elementor-widget-container">
                          <div class="elementor-icon-wrapper">
                            <div class="elementor-icon">
                              <i
                                aria-hidden="true"
                                class="far fa-grin-tongue-wink"
                              ></i>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div
                    class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-5a9690a0"
                    data-id="5a9690a0"
                    data-element_type="column"
                  >
                    <div
                      class="elementor-widget-wrap elementor-element-populated"
                    >
                      <div
                        class="elementor-element elementor-element-15c697ba elementor-widget elementor-widget-text-editor"
                        data-id="15c697ba"
                        data-element_type="widget"
                        data-widget_type="text-editor.default"
                      >
                        <div class="elementor-widget-container">
                          <p>
                            Descobrir os
                            <strong>segredos do mercado</strong> que os cursos
                            não ensinam.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              <section
                class="elementor-section elementor-inner-section elementor-element elementor-element-4ab93d29 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="4ab93d29"
                data-element_type="section"
              >
                <div class="elementor-container elementor-column-gap-default">
                  <div
                    class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-7a55d2c"
                    data-id="7a55d2c"
                    data-element_type="column"
                  >
                    <div
                      class="elementor-widget-wrap elementor-element-populated"
                    >
                      <div
                        class="elementor-element elementor-element-1083e2c6 elementor-mobile-align-justify elementor-align-center elementor-widget elementor-widget-button"
                        data-id="1083e2c6"
                        data-element_type="widget"
                        data-widget_type="button.default"
                      >
                        <div class="elementor-widget-container">
                          <div class="elementor-button-wrapper">
                            <a
                              href="#headline"
                              class="elementor-button-link elementor-button elementor-size-sm elementor-animation-buzz-out"
                              role="button"
                            >
                              <span class="elementor-button-content-wrapper">
                                <span class="elementor-button-text"
                                  >Quero assistir à aula</span
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
        class="elementor-section elementor-top-section elementor-element elementor-element-2c3ffe51 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="2c3ffe51"
        data-element_type="section"
      >
        <div class="elementor-container elementor-column-gap-default">
          <div
            class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-65ef9d74"
            data-id="65ef9d74"
            data-element_type="column"
            data-settings='{"background_background":"classic"}'
          >
            <div class="elementor-widget-wrap elementor-element-populated">
              <div
                class="elementor-element elementor-element-108aa56a elementor-widget elementor-widget-image"
                data-id="108aa56a"
                data-element_type="widget"
                data-widget_type="image.default"
              >
                <div class="elementor-widget-container">
                  <img
                    decoding="async"
                    width="502"
                    height="502"
                    src="https://conquistesuavaga.com/wp-content/uploads/2022/04/img13.jpg"
                    class="attachment-large size-large wp-image-1855"
                    alt=""
                    loading="lazy"
                    srcset="
                      https://conquistesuavaga.com/wp-content/uploads/2022/04/img13.jpg         502w,
                      https://conquistesuavaga.com/wp-content/uploads/2022/04/img13-300x300.jpg 300w,
                      https://conquistesuavaga.com/wp-content/uploads/2022/04/img13-150x150.jpg 150w
                    "
                    sizes="(max-width: 502px) 100vw, 502px"
                  />
                </div>
              </div>
            </div>
          </div>
          <div
            class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-38b9ad0e"
            data-id="38b9ad0e"
            data-element_type="column"
            data-settings='{"background_background":"classic"}'
          >
            <div class="elementor-widget-wrap elementor-element-populated">
              <section
                class="elementor-section elementor-inner-section elementor-element elementor-element-36a7dc86 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="36a7dc86"
                data-element_type="section"
              >
                <div class="elementor-container elementor-column-gap-default">
                  <div
                    class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-3d1b94e5"
                    data-id="3d1b94e5"
                    data-element_type="column"
                  >
                    <div
                      class="elementor-widget-wrap elementor-element-populated"
                    >
                      <div
                        class="elementor-element elementor-element-3f56a139 elementor-widget elementor-widget-heading"
                        data-id="3f56a139"
                        data-element_type="widget"
                        data-settings='{"_animation":"none"}'
                        data-widget_type="heading.default"
                      >
                        <div class="elementor-widget-container">
                          <h2
                            class="elementor-heading-title elementor-size-default"
                          >
                            Quem sou eu para ter ensinar?
                          </h2>
                        </div>
                      </div>
                      <div
                        class="elementor-element elementor-element-752cfa9b elementor-widget elementor-widget-text-editor"
                        data-id="752cfa9b"
                        data-element_type="widget"
                        data-widget_type="text-editor.default"
                      >
                        <div class="elementor-widget-container">
                          <p>
                            Comecei a trabalhar como dev há
                            <strong>16 anos</strong> e hoje também atuo como
                            professor na <strong>Alura</strong> e no
                            <strong>Ibmec</strong>.
                          </p>
                          <p> </p>
                          <p>
                            Sou <strong>MBA</strong> em Gestão de Conhecimento e
                            Negócios pela <strong>COPPE/UFRJ</strong>, e tenho
                            minha empresa de desenvolvimento de software, onde
                            sou criador de negócios inovadores.
                          </p>
                          <p> </p>
                          <p>
                            Depois de trabalhar em uma centena de projetos,
                            montar dezenas de equipes e
                            <strong>entrevistar mais de mil pessoas</strong>,
                            chegou a hora de mostrar como construí minha
                            carreira e
                            <strong
                              >ajudar você a conquistar sua vaga também</strong
                            >!
                          </p>
                          <p> </p>
                          <p>
                            Minha missão é ajudar quem deseja começar na
                            carreira de dev a se tornar um
                            <strong>dev desejado pelo mercado</strong>!
                          </p>
                        </div>
                      </div>
                      <div
                        class="elementor-element elementor-element-1e432a4e elementor-mobile-align-justify elementor-align-center elementor-widget elementor-widget-button"
                        data-id="1e432a4e"
                        data-element_type="widget"
                        data-widget_type="button.default"
                      >
                        <div class="elementor-widget-container">
                          <div class="elementor-button-wrapper">
                            <a
                              href="#headline"
                              class="elementor-button-link elementor-button elementor-size-sm elementor-animation-buzz-out"
                              role="button"
                            >
                              <span class="elementor-button-content-wrapper">
                                <span class="elementor-button-text"
                                  >Quero assistir à aula</span
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
        class="elementor-section elementor-top-section elementor-element elementor-element-81b623c elementor-hidden-mobile elementor-hidden-desktop elementor-hidden-tablet elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="81b623c"
        data-element_type="section"
      >
        <div class="elementor-container elementor-column-gap-default">
          <div
            class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-692fa805"
            data-id="692fa805"
            data-element_type="column"
            data-settings='{"background_background":"classic"}'
          >
            <div class="elementor-widget-wrap elementor-element-populated">
              <div
                class="elementor-element elementor-element-8e9cf03 elementor-widget elementor-widget-image"
                data-id="8e9cf03"
                data-element_type="widget"
                data-widget_type="image.default"
              >
                <div class="elementor-widget-container">
                  <img
                    decoding="async"
                    width="502"
                    height="502"
                    src="https://conquistesuavaga.com/wp-content/uploads/2022/04/img14.jpg"
                    class="attachment-large size-large wp-image-1856"
                    alt=""
                    loading="lazy"
                    srcset="
                      https://conquistesuavaga.com/wp-content/uploads/2022/04/img14.jpg         502w,
                      https://conquistesuavaga.com/wp-content/uploads/2022/04/img14-300x300.jpg 300w,
                      https://conquistesuavaga.com/wp-content/uploads/2022/04/img14-150x150.jpg 150w
                    "
                    sizes="(max-width: 502px) 100vw, 502px"
                  />
                </div>
              </div>
            </div>
          </div>
          <div
            class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-1e562b88"
            data-id="1e562b88"
            data-element_type="column"
            data-settings='{"background_background":"classic"}'
          >
            <div class="elementor-widget-wrap elementor-element-populated">
              <section
                class="elementor-section elementor-inner-section elementor-element elementor-element-793bfca4 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="793bfca4"
                data-element_type="section"
              >
                <div class="elementor-container elementor-column-gap-default">
                  <div
                    class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-42c8b03e"
                    data-id="42c8b03e"
                    data-element_type="column"
                  >
                    <div
                      class="elementor-widget-wrap elementor-element-populated"
                    >
                      <div
                        class="elementor-element elementor-element-5d7789ac elementor-widget elementor-widget-heading"
                        data-id="5d7789ac"
                        data-element_type="widget"
                        data-settings='{"_animation":"none"}'
                        data-widget_type="heading.default"
                      >
                        <div class="elementor-widget-container">
                          <h2
                            class="elementor-heading-title elementor-size-default"
                          >
                            Por que decidi preparar essa aula?
                          </h2>
                        </div>
                      </div>
                      <div
                        class="elementor-element elementor-element-30015c86 elementor-widget elementor-widget-text-editor"
                        data-id="30015c86"
                        data-element_type="widget"
                        data-widget_type="text-editor.default"
                      >
                        <div class="elementor-widget-container">
                          <div>
                            Porque
                            <strong>cansei de ver empresas desesperadas</strong
                            >, precisando contratar desenvolvedores, mas
                            frustradas com os candidatos.
                          </div>
                          <div> </div>
                          <div>
                            Porque
                            <strong
                              >cansei de ver candidatos que não conseguem chamar
                              atenção dos recrutadores</strong
                            >, embora sejam qualificados.
                          </div>
                          <div> </div>
                          <div>
                            Porque sei que
                            <strong
                              >todo mundo sai ganhando quando um dev é
                              contratado</strong
                            >.
                          </div>
                          <div> </div>
                          <div>
                            A empresa passa a atender melhor à sociedade,
                            enquanto o
                            <strong
                              >dev gera prosperidade para si mesmo e sua
                              família</strong
                            >.
                          </div>
                        </div>
                      </div>
                      <div
                        class="elementor-element elementor-element-7d77dd85 elementor-mobile-align-justify elementor-align-center elementor-widget elementor-widget-button"
                        data-id="7d77dd85"
                        data-element_type="widget"
                        data-widget_type="button.default"
                      >
                        <div class="elementor-widget-container">
                          <div class="elementor-button-wrapper">
                            <a
                              href="#headline"
                              class="elementor-button-link elementor-button elementor-size-sm elementor-animation-buzz-out"
                              role="button"
                            >
                              <span class="elementor-button-content-wrapper">
                                <span class="elementor-button-text"
                                  >Quero assistir à aula</span
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
        class="elementor-section elementor-top-section elementor-element elementor-element-58628034 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="58628034"
        data-element_type="section"
      >
        <div class="elementor-container elementor-column-gap-default">
          <div
            class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-3e3ac095"
            data-id="3e3ac095"
            data-element_type="column"
            data-settings='{"background_background":"classic"}'
          >
            <div class="elementor-widget-wrap elementor-element-populated">
              <div
                class="elementor-element elementor-element-ab59f30 elementor-widget elementor-widget-image"
                data-id="ab59f30"
                data-element_type="widget"
                data-widget_type="image.default"
              >
                <div class="elementor-widget-container">
                  <img
                    decoding="async"
                    width="502"
                    height="502"
                    src="https://conquistesuavaga.com/wp-content/uploads/2022/04/img15.jpg"
                    class="attachment-large size-large wp-image-1857"
                    alt=""
                    loading="lazy"
                    srcset="
                      https://conquistesuavaga.com/wp-content/uploads/2022/04/img15.jpg         502w,
                      https://conquistesuavaga.com/wp-content/uploads/2022/04/img15-300x300.jpg 300w,
                      https://conquistesuavaga.com/wp-content/uploads/2022/04/img15-150x150.jpg 150w
                    "
                    sizes="(max-width: 502px) 100vw, 502px"
                  />
                </div>
              </div>
            </div>
          </div>
          <div
            class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-55a7e0a1"
            data-id="55a7e0a1"
            data-element_type="column"
            data-settings='{"background_background":"classic"}'
          >
            <div class="elementor-widget-wrap elementor-element-populated">
              <section
                class="elementor-section elementor-inner-section elementor-element elementor-element-1e80f901 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="1e80f901"
                data-element_type="section"
              >
                <div class="elementor-container elementor-column-gap-default">
                  <div
                    class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-295cbadb"
                    data-id="295cbadb"
                    data-element_type="column"
                  >
                    <div
                      class="elementor-widget-wrap elementor-element-populated"
                    >
                      <div
                        class="elementor-element elementor-element-663c422e elementor-widget elementor-widget-heading"
                        data-id="663c422e"
                        data-element_type="widget"
                        data-settings='{"_animation":"none"}'
                        data-widget_type="heading.default"
                      >
                        <div class="elementor-widget-container">
                          <h2
                            class="elementor-heading-title elementor-size-default"
                          >
                            É a sua vez de jogar
                          </h2>
                        </div>
                      </div>
                      <div
                        class="elementor-element elementor-element-6177f201 elementor-widget elementor-widget-image"
                        data-id="6177f201"
                        data-element_type="widget"
                        data-widget_type="image.default"
                      >
                        <div class="elementor-widget-container">
                          <img
                            decoding="async"
                            width="500"
                            height="500"
                            src="https://conquistesuavaga.com/wp-content/uploads/2022/04/atencao-1.png"
                            class="attachment-large size-large wp-image-1858"
                            alt=""
                            loading="lazy"
                            srcset="
                              https://conquistesuavaga.com/wp-content/uploads/2022/04/atencao-1.png         500w,
                              https://conquistesuavaga.com/wp-content/uploads/2022/04/atencao-1-300x300.png 300w,
                              https://conquistesuavaga.com/wp-content/uploads/2022/04/atencao-1-150x150.png 150w
                            "
                            sizes="(max-width: 500px) 100vw, 500px"
                          />
                        </div>
                      </div>
                      <div
                        class="elementor-element elementor-element-e9b3c9 elementor-widget elementor-widget-heading"
                        data-id="e9b3c9"
                        data-element_type="widget"
                        data-settings='{"_animation":"none"}'
                        data-widget_type="heading.default"
                      >
                        <div class="elementor-widget-container">
                          <h2
                            class="elementor-heading-title elementor-size-default"
                          >
                            Assista à aula agora!
                          </h2>
                        </div>
                      </div>
                      <div
                        class="elementor-element elementor-element-7b400ac elementor-widget elementor-widget-text-editor"
                        data-id="7b400ac"
                        data-element_type="widget"
                        data-widget_type="text-editor.default"
                      >
                        <div class="elementor-widget-container">
                          <p>
                            <strong>Sua vaga está te esperando.<br /></strong>
                          </p>
                          <p> </p>
                          <p>
                            Conquistá-la é mais viável do que você imagina,
                            <strong>mesmo que você esteja começando</strong>.
                          </p>
                          <p> </p>
                          <p>
                            Você só precisa assistir à aula e
                            <strong
                              >aprender como funciona o jogo da
                              contratação</strong
                            >.
                          </p>
                          <p> </p>
                          <p>
                            Essa oportunidade tem
                            <strong>prazo de validade</strong>.
                          </p>
                          <p> </p>
                          <p>
                            A aula ficará no ar por
                            <strong>poucos dias</strong>.
                          </p>
                          <p> </p>
                          <p>
                            O que você e sua família vão colher no futuro
                            <strong>depende do que você planta hoje</strong>.
                          </p>
                          <p> </p>
                          <p>
                            <strong>Assista à aula agora</strong> e descubra
                            como se tornar um
                            <strong>dev desejado pelo mercado</strong>.
                          </p>
                          <p> </p>
                          <p><strong>É de graça por tempo limitado</strong>.</p>
                        </div>
                      </div>
                      <div
                        class="elementor-element elementor-element-13e7661c elementor-mobile-align-justify elementor-align-center elementor-widget elementor-widget-button"
                        data-id="13e7661c"
                        data-element_type="widget"
                        data-widget_type="button.default"
                      >
                        <div class="elementor-widget-container">
                          <div class="elementor-button-wrapper">
                            <a
                              href="#headline"
                              class="elementor-button-link elementor-button elementor-size-sm elementor-animation-buzz-out"
                              role="button"
                            >
                              <span class="elementor-button-content-wrapper">
                                <span class="elementor-button-text"
                                  >Quero assistir à aula</span
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
        nonce: "a468bda1ea",
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
          id: 1862,
          title:
            "Conquiste%20sua%20vaga%20de%20dev%20em%203%20passos%20mesmo%20sem%20experi%C3%AAncia",
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

<!-- Page generated by LiteSpeed Cache 5.4 on 2023-06-16 16:19:33 -->
