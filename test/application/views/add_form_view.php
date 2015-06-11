	   
	  		<div class="span9"> 
					       
						    <h4 style="margin-top:20px;">Написать письмо</h4> 
						    <div id="message" style="margin-top:50px;display:none"> </div> <!--Error field-->
							<form  class="form-horizontal"  id="send_mail" enctype="multipart/form-data" action = "" method="post" > 
							    
								                        
								<!--Поле Получатель-->
								<div class="control-group ">
									<label class="control-label" for="textinput">Получатель</label>
									<div class="controls">
										<input id="textinput" name="email" type="text" placeholder="введите e-mail получателя" class="span6">
									</div>
								</div>
							
								<!--Тема письма-->
								<div class="control-group ">
									<label class="control-label" for="textinput">Тема письма</label>
									<div class="controls">
										<input id="textinput" name="theme" type="text" placeholder="введите тему письма" class="span6">
									</div>
								</div>
							                        
								<!-- Текст письма -->
								<div class="control-group">
									<label class="control-label" for="textarea">Текст письма</label>
										<div class="controls">                     
											<textarea id="textarea" class="span6" rows="16" name="text"> </textarea>
										</div>
								</div>
	
								<!--Кнопки-->	
								<div class="control-group">
									<div class="controls" style='float:left; margin-left:450px;'>
										<button type="submit" id="button1id" name="button1id" class="btn">Отправить</button>
										<a class="btn" href="<?=base_url();?>index">Отменить</a>
									</div>
								</div>
								
							</form>
					</div>
	</body>
	</html>