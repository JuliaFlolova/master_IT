 	
<div class="span9"> 
	<form id="frm1" enctype="multipart/form-data" action ="<?php echo base_url();?>index/delete"  method="post" >
		<div class="alert alert-error" id="message" style="display:none" >Ошибка валидации формы!</div> <!--Error field-->
								<div style='margin-bottom:20px;'>
									<a class='btn' href="<?=base_url();?>index/send">Написать новое письмо</a><button type="submit" id="button1id" name="button1id" class="btn">Удалить выбранные письма</button>
								</div>
								<table class="table table-striped table-bordered" id="example" > <!-- Begin table "Book list"-->
									<thead>
									    <tr>
											<th><input type="checkbox" onclick="checkedAll();" name="checkall"></th>
											<th>Получатель</th>
											<th>Тема письма</th>
											<th>Дата отправления</th>
										</tr> 
                          			</thead>
									<tbody>
									   <?php foreach ($all_emails as $email){?>
                                        <tr>
											<td><input type="checkbox" name="chk[]" value="<?=$email['id'] ?>"></td>
											<td><a class="href" href="<?=base_url();?>index/read/<?=$email['id']?>"><?=$email['email']?> </a></td>
											<td><a class="href" href="<?=base_url();?>index/read/<?=$email['id']?>"><?=$email['theme']?></a></td>
											<td><?=$email['data']?></td>
										</tr> 
										<?php } ?>
										
									</tbody>
								</table> 
	</form>
</div> 


