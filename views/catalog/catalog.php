<?php include ROOT.'/views/layouts/header.php'; ?>
	
	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>
						
						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-6">
									<h1><span>E</span>-SHOPPER</h1>
									<h2>Free E-Commerce Template</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="template/images//home/girl1.jpg" class="girl img-responsive" alt="" />
									<img src="template/images//home/pricing.png"  class="pricing" alt="" />
								</div>
							</div>
							<div class="item">
								<div class="col-sm-6">
									<h1><span>E</span>-SHOPPER</h1>
									<h2>100% Responsive Design</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="template/images//home/girl2.jpg" class="girl img-responsive" alt="" />
									<img src="template/images//home/pricing.png"  class="pricing" alt="" />
								</div>
							</div>
							
							<div class="item">
								<div class="col-sm-6">
									<h1><span>E</span>-SHOPPER</h1>
									<h2>Free Ecommerce Template</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="template/images//home/girl3.jpg" class="girl img-responsive" alt="" />
									<img src="template/images//home/pricing.png" class="pricing" alt="" />
								</div>
							</div>
							
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Category</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
                                                    <?php foreach ($categories as $categoryItem): ?>
                                                        <div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
                                                                            <a href="/category/<?php echo $categoryItem['id']; ?>">
                                                                                <?php echo $categoryItem['name'];?>
                                                                            </a>
                                                                        </h4>
								</div>
							</div>
                                                        
                                                    
                                                    <?php endforeach; ?>
                                                    							
							
						</div><!--/category-products-->
					
						
						
						<div class="shipping text-center"><!--shipping-->
							<img src="template/images/home/shipping.jpg" alt="" />
						</div><!--/shipping-->
					
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Features Items</h2>
						
                                                <?php foreach ($categoryProducts as $product): ?>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="template/images/home/product2.jpg" alt="" />
										<h2><?php echo $product['price']; ?></h2>
                                                                                <p>
                                                                                    <a href="/product/<?php echo $product['id'];?>">
                                                                                        <?php echo $product['name']; ?>
                                                                                    </a>
                                                                                </p>
										<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
									</div>
                                                                    <?php if ($product['is_new']): ?>
                                                                        <img src="/template/images/home/new.png" class="new" alt="" />
                                                                    <?php endif; ?>
								</div>
								
							</div>
						</div>
                                                <?php endforeach; ?>
						
					</div><!--features_items-->
					

					
					
					
				</div>
			</div>
		</div>
	</section>
	
<?php include ROOT.'/views/layouts/footer.php'; ?>	
		
	

