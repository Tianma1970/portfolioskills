<?php

get_header(); ?>

<h1 class="text-center">My Programming skills</h1>
<p class="text-center"><i>push a button</i></p>
                <!--The animator-->
                <div class="container">
                        <div class="data mt-9 mt-1">
                            <input type="radio" name="data"         value=<?php the_field('wordpress'); ?>><label>WordPress</label>
                            <input type="radio" name="data"         value=<?php the_field('i18n'); ?>><label>i18n</label>
                            <input type="radio" name="data"         value=<?php the_field('docker'); ?>><label>Docker</label>
                            <input type="radio" name="data"         value=<?php the_field('php'); ?>><label>PHP</label>
                            <input type="radio" name="data"         value=<?php the_field('javascript'); ?>><label>JavaScript</label>
                            <input type="radio" name="data"         value=<?php the_field('html'); ?>><label>HTML</label>
                            <input type="radio" name="data"         value=<?php the_field('css'); ?>><label>CSS</label>
                            <input type="radio" name="data"         value=<?php the_field('scrum'); ?>><label>SCRUM</label>
                            <input type="radio" name="data"         value=<?php the_field('laravel'); ?>><label>Laravel</label>
                            <input type="radio" name="data"         value=""><label><?php _e('Reset Data', 'portfolio')?></label>
                        </div>
                    <div class="datas col-md-9 xs-6 offset-5">
                        <div class="column c-3">


  	                        <div class="lc col-md-9 mt-4">
  	                        
  	                            <div class="numbers n-100">
  		                            <div>0</div>
  		                            <div>1</div>
  		                            <div>2</div>
  		                            <div>3</div>
  		                            <div>4</div>
  		                            <div>5</div>
  		                            <div>6</div>
  		                            <div>7</div>
  		                            <div>8</div>
  		                            <div>9</div>
  	                            </div>

                                <div class="numbers n-10">
  		                            <div>0</div>
  		                            <div>1</div>
  		                            <div>2</div>
  		                            <div>3</div>
  		                            <div>4</div>
  		                            <div>5</div>
  		                            <div>6</div>
  		                            <div>7</div>
  		                            <div>8</div>
  		                            <div>9</div>
  	                            </div>

                                <div class="numbers n-1">
  		                            <div>0</div>
  		                            <div>1</div>
  		                            <div>2</div>
  		                            <div>3</div>
  		                            <div>4</div>
  		                            <div>5</div>
  		                            <div>6</div>
  		                            <div>7</div>
  		                            <div>8</div>
  		                            <div>9</div>
  	                            </div>
                                  <p style="color:black">&nbsp;%</p>
                            </div>
                    
                
                        </div>


                    
                    </div>
                        
        
                </div>

<?php
get_footer();