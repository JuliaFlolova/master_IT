
					<div class="span9"> 
					       
						    <h4 style="margin-top:20px;">Просмотр письма</h4> 
						    <div id="message" style="margin-top:50px;display:none"> </div> <!--Error field-->
							<form  class="form-horizontal"  id="send_mail" enctype="multipart/form-data" action = "" method="post" > 
							    
							<?php foreach ($show_mail as $email) {?>                        
								<!--Поле Получатель-->
								<div class="control-group ">
									<label class="control-label" for="textinput">Получатель</label>
									<div class="controls">
										<input id="textinput" name="email" type="text" placeholder="введите e-mail получателя" class="span6" value="<?=$email['email']?>" >
									</div>
								</div>
							
								<!--Тема письма-->
								<div class="control-group ">
									<label class="control-label" for="textinput">Тема письма</label>
									<div class="controls">
										<input id="textinput" name="theme" type="text" placeholder="введите тему письма" class="span6" value="<?=$email['theme']?>" >
									</div>
								</div>
							                        
								<!-- Текст письма -->
								<div class="control-group">
									<label class="control-label" for="textarea">Текст письма</label>
										<div class="controls">                     
											<textarea id="textarea" class="span6" rows="16" name="text"><?=$email['text']?></textarea>
										</div>
								</div>
	
								<!--Кнопки-->	
								<div class="control-group">
									<div class="controls" style='float:left; margin-left:400px;'>
										<button type="submit" id="button1id" name="button1id" class="btn">Переслать письмо</button>
										<a class="btn" href="<?=base_url();?>index">Отменить</a>
									</div>
								</div>
							<?php }?>  	
							</form>
					</div>
	</body>
	</html>