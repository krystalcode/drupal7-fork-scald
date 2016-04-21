<?php
/**
 * @file
 * Scald Audio player template
 * Created by Hervé Tubaldo - herve@webup.fr
 *
 * @Issue(
 *   "Pass on the width as a variable instead of hardcoding it here"
 *   type="improvement"
 *   priority="low"
 * )
 */
?>
<object type="application/x-shockwave-flash" data="<?php echo base_path().drupal_get_path('module','scald_audio'); ?>/libraries/dewplayer/dewplayer-playlist.swf" width="100%" height="20" id="dewplayer-<?php echo $vars['atom']->sid ?>" name="dewplayer">
  <param name="movie" value="<?php echo base_path().drupal_get_path('module','scald_audio'); ?>/libraries/dewplayer/dewplayer-playlist.swf" />
  <param name="flashvars" value="mp3=<?php echo file_create_url($vars['audio_uri']) ?>" />
  <param name="wmode" value="transparent" />
</object>
