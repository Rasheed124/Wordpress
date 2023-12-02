     <article className="pb-20 bg-white ">
        <section className="pb-14  ">
          <div className=" pb-5  ">
         
				<div class="py-16  px-10  ">
					<div class="max-w-5xl mx-auto pt-10 flex flex-col md:flex-row mt-16  space-y-5 md:space-y-0 justify-between ">
						<div class=" ">
							<ul class="flex flex-col lg:flex-row  space-x-5 ">
								<li class="text-lg font-Antonio  font-bold self-start transition-colors duration-700 ">
									<a href="<?php echo get_home_url();?>/blog" class="block  whitespace-nowrap">All Posts</a>
								</li>
							</ul>
						</div>

						<div class=" w-full lg:max-w-[450px]   block md:flex md:justify-end md:items-end ">
							<!-- Assuming SearchInput is a custom component, you might need to replace this line accordingly -->
							<!-- <SearchInput /> -->
						</div>
					</div>
				</div>


				<div class="mt-16  max-w-4xl  shadow-sm mx-auto   p-3.5 px-10  ">
					<div class="flex justify-between items-center ">
						<div class="flex w-full  flex-col lg:flex-row justify-center lg:justify-start text-center items-center space-x-5 ">
							<div class="flex flex-col lg:flex-row justify-center items-center">
							
								<img class="rounded-full object-cover mr-2" src="author-image-url" alt="Author" width="50" height="50" />

								<span class="font-bold font-Sohne-Bold text-lg whitespace-nowrap ">
									Author
								</span>
							</div>

							<div class="flex flex-col lg:flex-row justify-center items-center">
								<span>
								Date
								</span>
								<span class="font-medium lg:ml-5 ">
									8 min Read
								</span>
							</div>
						</div>

						<div class="ml-3  flex flex-wrap ">
							<span class="block cursor-pointer relative">
								<!-- Assuming `BiDotsVerticalRounded` is an icon that triggers some action -->
								<!-- You might need to replace this line accordingly -->
								<!-- <BiDotsVerticalRounded onClick={() => setIsShowSharePost(!ShowSharePost)} /> -->
								<button>Click me</button>

						
							</span>
						</div>
					</div>

					<div class="my-2 p-2 text-center lg:text-left">
						<h3 class="font-semibold text-xl font-Sohne-Bold mb-3">
							Post Title
						</h3>

						<p>
							<span class="mr-2 font-semibold">Updated at: </span>
							Date
						</p>
					</div>
				</div>


          </div>


        </section>
      </article>