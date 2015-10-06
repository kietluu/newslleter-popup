<?php
/**
 * Created by PhpStorm.
 * User: kietluu
 * Date: 06/10/2015
 * Time: 11:15
 */

$content = '<div class="highslide-dimming highslide-viewport-size"
	 style="padding: 0px; border: none; margin: 0px; visibility: visible; opacity: 0.75;z-index:999;display:none;"></div>
<div id="esns_background_layer" style="display:none;">
	<div id="highslide-wrapper-0" class="highslide-wrapper iframe_hs hs_newsletter">
		<div class="highslide-html">
			<div style="padding: 0px; border: none; margin: 0px; position: relative; width: 496px;">
				<div class="highslide-html-content">
					<div class="highslide-html-content-inside">
						<div class="highslide-body">
							<div class="highslide-maincontent" style="display: block;" id="hsId1">
								<div id="news-popup-content">
									<div class="newsletter-popup">
										<div class="block block-subscribe" style="background: transparent url(http://10.87.1.180/magento_ee/skin/frontend/base/default/images/bc-newsletter/bg.jpg) no-repeat;">
											<h2>Great design direct <br> from the makers<a
													name="newsletter-box"></a>
											</h2>

											<div class="block-content">
												<p>Subscribe to our newsletter to get the <br>latest deals and get a
													free £10 voucher<br>off your first order</p>
												<legend>
Newsletter
												</legend>

												<label for="newsletter-signup-popup">
Sign up for our newsletter: </label>

												<div class="input-box" style="text-align: left;">
													{{block type="newsletter/subscribe"
													template="bc_newsletter/form.phtml"}}
												</div>


											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="highslide-footer">
						<div><span class="highslide-resize" title="Resize"><span></span></span></div>
					</div>
				</div>
			</div>
		</div>
		<div class="layer-btn-close">
			<div id="hsId2">
				<div style="display: block;">
					<div class="closebutton" id="btn-close-popup" title="Close"></div>
				</div>
			</div>
		</div>
	</div>
</div>
<a href="#" onclick="return false;" id="sign-up-widget" class="hs_newsletter"
   style="cursor: pointer; height: 81px; width: 44px;">
	   £10 off your first order when you sign up for our newsletter</a>';

$identifier = 'newsletter_popup';

Mage::app()->setCurrentStore(Mage_Core_Model_App::ADMIN_STORE_ID);
$data = array(
	'title' => 'Newsletter Popup',
	'identifier' => $identifier,
	'content' => $content,
	'is_active' => 1,
	'stores' => array(0)
);
$collection = Mage::getModel('cms/block')->getCollection()->addFieldToFilter('identifier', $identifier)->getFirstItem();
if ($collection->getId() == NULL)
	Mage::getModel('cms/block')->setData($data)->save();
