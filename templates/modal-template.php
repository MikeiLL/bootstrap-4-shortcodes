<?php
/**
 * Backbone Templates
 * This file contains all of the HTML used in our modal and the workflow itself.
 *
 * Each template is wrapped in a script block ( note the type is set to "text/html" ) and given an ID prefixed with
 * 'tmpl'. The wp.template method retrieves the contents of the script block and converts these blocks into compiled
 * templates to be used and reused in your application.
 */


/**
 * The Modal Window, including sidebar and content area.
 * Add menu items to ".navigation-bar nav ul"
 * Add content to ".backbone_modal-main article"
 */
?>
<div id="bootstrap-4-shortcodes-help">
<div id="bootstrap-4-shortcodes-help-modal" class="modal fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
					<div class="container-fluid">
						<div class="row">
							<nav id="bs4-table-of-contents" class="col-sm-3 left hidden-sm-down">
								<ul>
									<li><a href="#bs-shortcode-reference">Shortcode Reference</a></li>
									<li><a href="#bs-requirements">System Requirements</a></li>
								</ul>
								<?php echo file_get_contents(BS4_SHORTCODES_DIR . '/dist/docs/toc.html'); ?>
							</nav>
						<div class="col-sm-9 right">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4>Bootstrap 4 Shortcodes Help</h4>
            </div>

            <div class="modal-body">
				<section role="main">
					<article>
				<?php
					$html = file_get_contents(BS4_SHORTCODES_DIR . '/dist/docs/documentation.html');
							// ======================================================================== //
							// Put HTML content in the page so we can pop it up in a modal
							// But first edit the HTML to make it more useful as popup documentation
							//      * Alter links to open in new tabs
							//      * Add Bootstrap styling to tables
							//      * Add Bootstrap styling to lists (and replace ULs with DIVs, and LIs with As)
							//      * Edit anchors to be on-page jumps
							//      * Add back-to-top buttons after sections
							//      * Add IDs to h3 tags for the above on-page jumps
							//      * Add "Insert Example" buttons after code examples
							// ======================================================================== //

							//Insert the HTML now that we're done editing it
							$html = str_replace('data-path="placeholder"', 'data-path="' . BS4_SHORTCODES_RELATIVE_URL . 'dist/images/"', $html);
							echo $html;

				?>
				</article>
			</section>
		</div>
	</div>
</div>
		</div><!-- /.modal-body -->

</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</div>
