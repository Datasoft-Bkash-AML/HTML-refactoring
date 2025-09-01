<?php
// Reusable heading partial
// Usage: include __DIR__ . '/heading-partial.php'; with $heading_text and optional $level (h2/h3/h4)
if (!isset($heading_text)) $heading_text = '';
if (!isset($level)) $level = 'h3';
?>
<div class="component-heading">
  <?php echo '<' . $level . ' class="component-heading__title">' . htmlspecialchars($heading_text) . '</' . $level . '>'; ?>
</div>
