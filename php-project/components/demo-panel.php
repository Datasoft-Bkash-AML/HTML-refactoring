<?php
// chunk-68..75: demo panel UI (wrapper, header, controls, content tabs, items template)
?>
<div class="rey-demoPanel-wrapper --loading" id="rey-demoPanel-wrapper" role="dialog" aria-modal="false" aria-label="Demo panel">
    <div class="rey-demoPanel-overlay"></div>
    <div class="rey-demoPanel-panelWrapper">
        <div class="rey-demoPanel-buttonsWrapper">
            <div class="rey-demoPanel-buttons">
                <a href="#" class="rey-demoPanel-btn js-rey-moreDemos"><span>MORE DEMOS</span><span class="rey-demoPanel-arr">›</span></a>
                <a href="#" class="rey-demoPanel-btn">BUY AT $69</a>
                <a href="#" class="rey-demoPanel-btn rey-demoPanel-remove" data-rey-demos-tooltip="REMOVE PANEL">Remove</a>
            </div>
        </div>

        <div class="rey-demoPanel" data-size="1">
            <div class="rey-demoPanel-handler js-demoPanel-handler" data-rey-demos-tooltip="CLICK TO RESIZE"></div>
            <div class="rey-demoPanel-header">
                <ul class="rey-demoPanel-tabs">
                    <li><a href="#" class="--active" data-tab="demos">DEMOS</a></li>
                    <li><a href="#" data-tab="pages" data-supports="categories, search">PAGES</a></li>
                    <li data-rey-demos-tooltip="COMING SOON!"><a href="#" data-tab="sections" class="--disabled">SECTIONS</a></li>
                    <li data-rey-demos-tooltip="COMING SOON!"><a href="#" data-tab="features" class="--disabled">FEATURES</a></li>
                </ul>
                <div class="rey-demoPanel-search js-demoPanel-search">
                    <svg class="rey-icon u-icon" viewBox="0 0 30 30"><title>Search</title></svg>
                    <input type="search" placeholder="Type to search..">
                </div>
            </div>

            <div class="rey-demoPanel-controls">
                <ul>
                    <li><a href="#" class="demoPanel-sizeControls" data-sizing="1" data-rey-demos-tooltip="ENLARGE PANEL">▲</a></li>
                    <li class="demoPanel-sizeControls-dots"><span></span><span></span><span></span></li>
                    <li><a href="#" class="demoPanel-sizeControls" data-sizing="-1" data-rey-demos-tooltip="SHRINK PANEL">▼</a></li>
                </ul>
                <a href="#" class="rey-demoPanel-close" data-rey-demos-tooltip="CLOSE PANEL">✕</a>
            </div>

            <div class="rey-demoPanel-contentWrapper">
                <div class="rey-demoPanel-content">
                    <div class="rey-demoPanel-contentTab --active" data-tab="demos"></div>
                    <div class="rey-demoPanel-contentTab" data-tab="pages" data-per-row="7"></div>
                </div>
            </div>
        </div>

        <div class="rey-demoPanel-contentItems">
            <!-- JS template preserved: Object.keys(data.items).forEach... -->
        </div>
    </div>
</div>
