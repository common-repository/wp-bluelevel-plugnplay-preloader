<?php
/*
    Plugin Name: WP BlueLevel PlugNPlay Preloader
    Plugin URI: http://www.bluelevel.in/plugins/plgnplay-preloader
    Description: The only preloader plug-in which doesn't require you to code a single line. Just install and you are through. More than 50 css3 animations to choose from. Change color, size, background.
    Author: Bluelevel
    Author URI: http://www.bluelevel.in
    Version: 1.0
    */

    //Calling the files needed to get the Gallery w||king
    function WpBlLoAw_files(){
        wp_register_style('clock', plugins_url('/css/all.min.css', __FILE__), true);
        wp_enqueue_style('clock');
        wp_enqueue_script('jquery-ui-core');
        wp_enqueue_script('iris');
        wp_enqueue_script('custom', plugins_url('/js/code.js', __FILE__), array('jquery'), true);

    }
    add_action('after_setup_theme', 'WpBlLoAw_files');
    add_action( 'admin_menu', 'WpBlLoAw_add_admin_menu' );
    add_action( 'admin_init', 'WpBlLoAw_settings_init' );


    function WpBlLoAw_add_admin_menu(  ) {

        add_menu_page( 'WP BlueLevel PlugNPlay Preloader', 'WP BlueLevel PlugNPlay Preloader', 'manage_options', 'wp_bluelevel_load_awesome', 'WpBlLoAw_options_page', 'dashicons-image-filter');

    }


    function WpBlLoAw_settings_init(  ) {

      register_setting( 'pluginPage', 'WpBlLoAw_settings' );

      add_settings_section(
        'WpBlLoAw_pluginPage_section',
        __( 'The First Plug and Play Preloader on Wordpress', 'bluelevel' ),
        'WpBlLoAw_settings_section_callback',
        'pluginPage'
      );

      add_settings_field(
        'WpBlLoAw_text_field_0',
        __( 'Preloader Color', 'bluelevel' ),
        'WpBlLoAw_text_field_0_render',
        'pluginPage',
        'WpBlLoAw_pluginPage_section'
      );

      add_settings_field(
        'WpBlLoAw_text_field_1',
        __( 'Preloader Background Color', 'bluelevel' ),
        'WpBlLoAw_text_field_1_render',
        'pluginPage',
        'WpBlLoAw_pluginPage_section'
      );

      add_settings_field(
        'WpBlLoAw_select_field_4',
        __( 'Preloader Size', 'bluelevel' ),
        'WpBlLoAw_select_field_4_render',
        'pluginPage',
        'WpBlLoAw_pluginPage_section'
      );

      add_settings_field(
        'WpBlLoAw_select_field_2',
        __( 'Preloader Animation', 'bluelevel' ),
        'WpBlLoAw_select_field_2_render',
        'pluginPage',
        'WpBlLoAw_pluginPage_section'
      );

      add_settings_field(
        'WpBlLoAw_select_field_3',
        __( 'Live Demo', 'bluelevel' ),
        'WpBlLoAw_select_field_3_render',
        'pluginPage',
        'WpBlLoAw_pluginPage_section'
      );


    }


    function WpBlLoAw_text_field_0_render(  ) {

      $options = get_option( 'WpBlLoAw_settings' );
      ?>
      <input type='text' name='WpBlLoAw_settings[WpBlLoAw_text_field_0]' class="clrpckr1" value='<?php echo $options['WpBlLoAw_text_field_0']; ?>'>
      <?php

    }


    function WpBlLoAw_text_field_1_render(  ) {

      $options = get_option( 'WpBlLoAw_settings' );
      ?>
      <input type='text' name='WpBlLoAw_settings[WpBlLoAw_text_field_1]' class="clrpckr2" value='<?php echo $options['WpBlLoAw_text_field_1']; ?>'>
      <?php

    }

    function WpBlLoAw_select_field_4_render(  ) {

      $options = get_option( 'WpBlLoAw_settings' );
      ?>
      <select name='WpBlLoAw_settings[WpBlLoAw_select_field_4]'>
        <option value='la-sm' <?php selected( $options['WpBlLoAw_select_field_4'], 'la-sm' ); ?>>Small Size</option>
        <option value='' <?php selected( $options['WpBlLoAw_select_field_4'], '' ); ?>>Default Size</option>
        <option value='la-2x' <?php selected( $options['WpBlLoAw_select_field_4'], 'la-2x' ); ?>>2x Size</option>
        <option value='la-3x' <?php selected( $options['WpBlLoAw_select_field_4'], 'la-3x' ); ?>>3x Size</option>
      </select>
      <?php

    }


    function WpBlLoAw_select_field_2_render(  ) {

      $options = get_option( 'WpBlLoAw_settings' );
      ?>
      <select name='WpBlLoAw_settings[WpBlLoAw_select_field_2]'>
        <option value='la-ball-8bits' <?php selected( $options['WpBlLoAw_select_field_2'], 'la-ball-8bits' ); ?>>Ball - 8bits</option>
        <option value='la-ball-atom' <?php selected( $options['WpBlLoAw_select_field_2'], 'la-ball-atom' ); ?>>Ball - Atom</option>
        <option value='la-ball-beat' <?php selected( $options['WpBlLoAw_select_field_2'], 'la-ball-beat' ); ?>>Ball - Beat</option>
        <option value='la-ball-circus' <?php selected( $options['WpBlLoAw_select_field_2'], 'la-ball-circus' ); ?>>Ball - Circus</option>
        <option value='la-ball-climbing-dot' <?php selected( $options['WpBlLoAw_select_field_2'], 'la-ball-climbing-dot' ); ?>>Ball - Climbing Dot</option>
        <option value='la-ball-clip-rotate' <?php selected( $options['WpBlLoAw_select_field_2'], 'la-ball-clip-rotate' ); ?>>Ball - Clip Rotate</option>
        <option value='la-ball-clip-rotate-multiple' <?php selected( $options['WpBlLoAw_select_field_2'], 'la-ball-clip-rotate-multiple' ); ?>>Ball - Clip Rotate Multiple</option>
        <option value='la-ball-clip-rotate-pulse' <?php selected( $options['WpBlLoAw_select_field_2'], 'la-ball-clip-rotate-pulse' ); ?>>Ball - Clip Rotate Pulse</option>
        <option value='la-ball-elastic-dots' <?php selected( $options['WpBlLoAw_select_field_2'], 'la-ball-elastic-dots' ); ?>>Ball - Elastic Dots</option>
        <option value='la-ball-fall' <?php selected( $options['WpBlLoAw_select_field_2'], 'la-ball-fall' ); ?>>Ball - Fall</option>
        <option value='la-ball-fussion' <?php selected( $options['WpBlLoAw_select_field_2'], 'la-ball-fussion' ); ?>>Ball - Fusion</option>
        <option value='la-ball-grid-beat' <?php selected( $options['WpBlLoAw_select_field_2'], 'la-ball-grid-beat' ); ?>>Ball - Grid Beat</option>
        <option value='la-ball-grid-pulse' <?php selected( $options['WpBlLoAw_select_field_2'], 'la-ball-grid-pulse' ); ?>>Ball - Grid Pulse</option>
        <option value='la-ball-newton-cradle' <?php selected( $options['WpBlLoAw_select_field_2'], 'la-ball-newton-cradle' ); ?>>Ball - Newton Cradle</option>
        <option value='la-ball-pulse' <?php selected( $options['WpBlLoAw_select_field_2'], 'la-ball-pulse' ); ?>>Ball - Pulse</option>
        <option value='la-ball-pulse-rise' <?php selected( $options['WpBlLoAw_select_field_2'], 'la-ball-pulse-rise' ); ?>>Ball - Pulse Rise</option>
        <option value='la-ball-pulse-sync' <?php selected( $options['WpBlLoAw_select_field_2'], 'la-ball-pulse-sync' ); ?>>Ball - Pulse Sync</option>
        <option value='la-ball-rotate' <?php selected( $options['WpBlLoAw_select_field_2'], 'la-ball-rotate' ); ?>>Ball - Rotate</option>
        <option value='la-ball-running-dots' <?php selected( $options['WpBlLoAw_select_field_2'], 'la-ball-running-dots' ); ?>>Ball - Running Dots</option>
        <option value='la-ball-scale' <?php selected( $options['WpBlLoAw_select_field_2'], 'la-ball-scale' ); ?>>Ball - Ripple</option>
        <option value='la-ball-scale-multiple' <?php selected( $options['WpBlLoAw_select_field_2'], 'la-ball-scale-multiple' ); ?>>Ball - Ripple Multiple</option>
        <option value='la-ball-scale-pulse' <?php selected( $options['WpBlLoAw_select_field_2'], 'la-ball-scale-pulse' ); ?>>Ball - Scale Pulse</option>
        <option value='la-ball-scale-ripple' <?php selected( $options['WpBlLoAw_select_field_2'], 'la-ball-scale-ripple' ); ?>>Ball - Ripple 2</option>
        <option value='la-ball-scale-ripple-multiple' <?php selected( $options['WpBlLoAw_select_field_2'], 'la-ball-scale-multiple' ); ?>>Ball - Ripple Multiple 2</option>
        <option value='la-ball-spin' <?php selected( $options['WpBlLoAw_select_field_2'], 'la-ball-spin' ); ?>>Ball - Spin Anticlockwise</option>
        <option value='la-ball-spin-clockwise' <?php selected( $options['WpBlLoAw_select_field_2'], 'la-ball-spin-clockwise' ); ?>>Ball - Spin Clockwise</option>
        <option value='la-ball-spin-fade' <?php selected( $options['WpBlLoAw_select_field_2'], 'la-ball-spin-fade' ); ?>>Ball - Spin Antilockwise Fade</option>
        <option value='la-ball-spin-clockwise-fade' <?php selected( $options['WpBlLoAw_select_field_2'], 'la-ball-spin-clockwise-fade' ); ?>>Ball - Spin Clockwise Fade</option>
        <option value='la-ball-spin-fade-rotating' <?php selected( $options['WpBlLoAw_select_field_2'], 'la-ball-spin-fade-rotating' ); ?>>Ball - Spin Anticlockwise Fade Rotating</option>
        <option value='la-ball-spin-clockwise-fade-rotating' <?php selected( $options['WpBlLoAw_select_field_2'], 'la-ball-spin-clockwise-fade-rotating' ); ?>>Ball - Spin Clockwise Fade Rotating</option>
        <option value='la-ball-spin-rotate' <?php selected( $options['WpBlLoAw_select_field_2'], 'la-ball-spin-rotate' ); ?>>Ball - Spin Rotate</option>
        <option value='la-ball-square-spin' <?php selected( $options['WpBlLoAw_select_field_2'], 'la-ball-square-spin' ); ?>>Ball - Square Spin Anticlockwise</option>
        <option value='la-ball-square-clockwise-spin' <?php selected( $options['WpBlLoAw_select_field_2'], 'la-ball-square-clockwise-spin' ); ?>>Ball - Square Spin Clockwise</option>
        <option value='la-ball-triangle-path' <?php selected( $options['WpBlLoAw_select_field_2'], 'la-ball-triangle-path' ); ?>>Ball - Triangle Path</option>
        <option value='la-ball-zig-zag' <?php selected( $options['WpBlLoAw_select_field_2'], 'la-ball-zig-zag' ); ?>>Ball - Zig Zag</option>
        <option value='la-ball-zig-zag-deflect' <?php selected( $options['WpBlLoAw_select_field_2'], 'la-ball-zig-zag-deflect' ); ?>>Ball - Zig Zag Deflect</option>

        <option value='la-cog' <?php selected( $options['WpBlLoAw_select_field_2'], 'la-cog' ); ?>>Cog</option>
        <option value='la-fire' <?php selected( $options['WpBlLoAw_select_field_2'], 'la-fire' ); ?>>Fire</option>
        <option value='la-line-scale' <?php selected( $options['WpBlLoAw_select_field_2'], 'la-line-scale' ); ?>>Line - Scale</option>
        <option value='la-line-scale-party' <?php selected( $options['WpBlLoAw_select_field_2'], 'la-line-scale-party' ); ?>>Line - Scale Party </option>
        <option value='la-line-scale-pulse-out' <?php selected( $options['WpBlLoAw_select_field_2'], 'la-line-scale-pulse-out' ); ?>>Line - Scale Pulse Out</option>
        <option value='la-line-scale-pulse-out-rapid' <?php selected( $options['WpBlLoAw_select_field_2'], 'la-line-scale-pulse-out-rapid' ); ?>>Line - Scale Pulse Out Rapid</option>
        <option value='la-line-spin-fade' <?php selected( $options['WpBlLoAw_select_field_2'], 'la-line-spin-fade' ); ?>>Line - Spin Anticlockwise Fade</option>
        <option value='la-line-spin-clockwise-fade' <?php selected( $options['WpBlLoAw_select_field_2'], 'la-ball-spin-clockwise-fade' ); ?>>Line - Spin Clockwise Fade</option>
        <option value='la-line-spin-fade-rotating' <?php selected( $options['WpBlLoAw_select_field_2'], 'la-line-spin-fade-rotating' ); ?>>Line - Spin Anticlockwise Fade Rotating</option>
        <option value='la-line-spin-clockwise-fade-rotating' <?php selected( $options['WpBlLoAw_select_field_2'], 'la-line-spin-clockwise-fade-rotating' ); ?>>Line - Spin Clockwise Fade Rotating</option>
        <option value='la-pacman' <?php selected( $options['WpBlLoAw_select_field_2'], 'la-pacman' ); ?>>PacMan</option>
        <option value='la-square-spin' <?php selected( $options['WpBlLoAw_select_field_2'], 'la-square-spin' ); ?>>Square - Spin</option>
        <option value='la-square-jelly-box' <?php selected( $options['WpBlLoAw_select_field_2'], 'la-square-jelly-box' ); ?>>Square - Jelly Box</option>
        <option value='la-square-loader' <?php selected( $options['WpBlLoAw_select_field_2'], 'la-square-loader' ); ?>>Square - Progress Loader</option>
        <option value='la-timer' <?php selected( $options['WpBlLoAw_select_field_2'], 'la-timer' ); ?>>Circle - Clock</option>
        <option value='la-triangle-skew-spin' <?php selected( $options['WpBlLoAw_select_field_2'], 'la-triangle-skew-spin' ); ?>>Triangle - Skew Spin</option>
      </select>

    <?php

    }


    function WpBlLoAw_select_field_3_render(  ) {

      $options = get_option( 'WpBlLoAw_settings' );
      $val = $options['WpBlLoAw_select_field_2'];
      $sz = $options['WpBlLoAw_select_field_4'];
      $col = $options['WpBlLoAw_text_field_0'];
      ?>
      <div class="<?php echo $val; ?> <?php echo $sz; ?>" style="color: <?php echo $col; ?>"><?php
      switch ($val) {
        case 'la-ball-8bits':?>
          <div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div>
          <?php
          break;
        case 'la-ball-grid-beat':
        case 'la-ball-grid-pulse':?>
          <div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div> <?php
          break;
        case 'la-ball-clip-rotate':
        case 'la-ball-rotate':
        case 'la-ball-scale':
        case 'la-cog':
        case 'la-square-loader':
        case 'la-square-spin':
        case 'la-timer':
        case 'la-triangle-skew-spin':
        case 'la-ball-scale-ripple':?>
          <div></div><?php
          break;
        case 'la-ball-clip-rotate-pulse':
        case 'la-ball-scale-pulse':
        case 'la-square-jelly-box':
        case 'la-ball-zig-zag-deflect':
        case 'la-ball-zig-zag-deflect':
        case 'la-ball-zig-zag':
        case 'la-ball-spin-rotate':
        case 'la-ball-newton-cradle':
        case 'la-ball-fussion':
        case 'la-ball-climbing-dot':
        case 'la-ball-atom':?>
          <div></div><div></div><div></div><div></div> <?php
          break;
        case 'la-ball-beat':
        case 'la-ball-fall':
        case 'la-ball-pulse':
        case 'la-ball-scale-multiple':
        case 'la-ball-scale-ripple-multiple':
        case 'la-ball-triangle-path':
        case 'la-fire':
        case 'la-ball-pulse-sync':?>
          <div></div><div></div><div></div> <?php
          break;
        case 'la-ball-clip-rotate-multiple':
        case 'la-ball-circus':
        case 'la-ball-elastic-dots':
        case 'la-ball-pulse-rise':
        case 'la-ball-running-dots':
        case 'la-line-scale':
        case 'la-line-scale-party':
        case 'la-line-scale-pulse-out':
        case 'la-line-scale-pulse-out-rapid':?>
        <div></div><div></div><div></div><div></div><div></div> <?php
          break;
        case 'la-ball-beat':
        case 'la-ball-fall':
        case 'la-ball-pulse':
        case 'la-ball-scale-multiple':
        case 'la-ball-scale-ripple-multiple':
        case 'la-ball-triangle-path':
        case 'la-fire':
        case 'la-ball-pulse-sync':?>
          <div></div><div></div><div></div> <?php
          break;
        case 'la-pacman':?>
          <div></div><div></div><div></div><div></div><div></div><div></div> <?php
          break;
            case 'la-ball-spin':
            case 'la-ball-spin-clockwise':
            case 'la-ball-spin-clockwise-fade':
            case 'la-ball-spin-clockwise-fade-rotating':
            case 'la-ball-spin-fade':
            case 'la-ball-spin-fade-rotating':
            case 'la-ball-square-spin':
            case 'la-line-spin-clockwise-fade':
            case 'la-line-spin-clockwise-fade-rotating':
            case 'la-line-spin-fade':
            case 'la-line-spin-fade-rotating':
            case 'la-ball-square-clockwise-spin':?>
            <div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div> <?php
              break;

      }
      ?></div>
    <?php

    }


    function WpBlLoAw_settings_section_callback(  ) {

      echo __( 'Just Configure and Youre Done!!', 'bluelevel' );

    }


    function WpBlLoAw_options_page(  ) {

      ?>
      <form action='options.php' method='post'>

        <h2><i class="dashicons dashicons-image-filter"></i>WP BlueLevel PlugNPlay Preloader</h2>

        <?php
        settings_fields( 'pluginPage' );
        do_settings_sections( 'pluginPage' );
        submit_button();
        ?>

      </form>
      <?php

    }

    function cont_end(){
        ?>
    </div></div>
    <?php
    }
    add_action('wp_footer', 'cont_end');
    function cont_start(){
      $options = get_option( 'WpBlLoAw_settings' );
      $val = $options['WpBlLoAw_select_field_2'];
      $sz = $options['WpBlLoAw_select_field_4'];
      $col = $options['WpBlLoAw_text_field_0'];
      $col2 = $options['WpBlLoAw_text_field_1'];
    	?>


    <div class="prel-cont"><div class="prel-vrl" style="background-color: <?php echo $col2; ?>"><div class="lod-aws <?php echo $val; ?> <?php echo $sz; ?>" style="color: <?php echo $col; ?>"><?php
    switch ($val) {
      case 'la-ball-8bits':?>
        <div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div>
        <?php
        break;
      case 'la-ball-grid-beat':
      case 'la-ball-grid-pulse':?>
        <div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div> <?php
        break;
      case 'la-ball-newton-cradle':
      case 'la-ball-fussion':
      case 'la-ball-climbing-dot':
      case 'la-ball-atom':?>
        <div></div><div></div><div></div><div></div> <?php
        break;
      case 'la-ball-clip-rotate':
      case 'la-ball-rotate':
      case 'la-ball-scale':
      case 'la-cog':
      case 'la-square-loader':
      case 'la-square-spin':
      case 'la-timer':
      case 'la-triangle-skew-spin':
      case 'la-ball-scale-ripple':?>
        <div></div><?php
        break;
      case 'la-ball-clip-rotate-multiple':
      case 'la-ball-clip-rotate-pulse':
      case 'la-ball-scale-pulse':
      case 'la-square-jelly-box':
      case 'la-ball-zig-zag-deflect':
      case 'la-ball-zig-zag-deflect':
      case 'la-ball-zig-zag':
      case 'la-ball-spin-rotate':?>
        <div></div><div></div><div></div><div></div> <?php
        break;
      case 'la-ball-beat':
      case 'la-ball-fall':
      case 'la-ball-pulse':
      case 'la-ball-scale-multiple':
      case 'la-ball-scale-ripple-multiple':
      case 'la-ball-triangle-path':
      case 'la-fire':
      case 'la-ball-pulse-sync':?>
        <div></div><div></div><div></div> <?php
        break;
      case 'la-ball-circus':
      case 'la-ball-elastic-dots':
      case 'la-ball-pulse-rise':
      case 'la-ball-running-dots':
      case 'la-line-scale':
      case 'la-line-scale-party':
      case 'la-line-scale-pulse-out':
      case 'la-line-scale-pulse-out-rapid':?>
      <div></div><div></div><div></div><div></div><div></div> <?php
        break;
      case 'la-ball-beat':
      case 'la-ball-fall':
      case 'la-ball-pulse':
      case 'la-ball-scale-multiple':
      case 'la-ball-scale-ripple-multiple':
      case 'la-ball-triangle-path':
      case 'la-fire':
      case 'la-ball-pulse-sync':?>
        <div></div><div></div><div></div> <?php
        break;
      case 'la-pacman':?>
        <div></div><div></div><div></div><div></div><div></div><div></div> <?php
        break;
          case 'la-ball-spin':
          case 'la-ball-spin-clockwise':
          case 'la-ball-spin-clockwise-fade':
          case 'la-ball-spin-clockwise-fade-rotating':
          case 'la-ball-spin-fade':
          case 'la-ball-spin-fade-rotating':
          case 'la-ball-square-spin':
          case 'la-line-spin-clockwise-fade':
          case 'la-line-spin-clockwise-fade-rotating':
          case 'la-line-spin-fade':
          case 'la-line-spin-fade-rotating':
          case 'la-ball-square-clockwise-spin':?>
          <div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div> <?php
            break;

    }
    ?></div><h3 style="width: 400px; color: <?php echo $col; ?>">Loading <?php bloginfo('title'); ?>........</h3></div><div class="prel-wrap"><?php
    }
    add_action('wp_enqueue_scripts', 'cont_start');
