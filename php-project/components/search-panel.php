<?php
// chunk-89..90: search panel and results container
?>
<div id="rey-searchPanel" class="rey-searchPanel rey-searchForm rey-searchAjax js-rey-ajaxSearch --hidden" data-style="wide" role="search" aria-label="Site search">
    <div class="rey-searchPanel-inner">
        <form action="#" method="get">
            <label for="search-input">Search</label>
            <div class="rey-searchPanel-innerForm">
                <input type="search" name="s" placeholder="type to search.." id="search-input" value="" />
                <div class="rey-headerSearch-actions">
                    <input type="hidden" name="post_type" value="product" />
                </div>
            </div>
        </form>
        <div class="rey-searchResults js-rey-searchResults"></div>
    </div>
</div>
