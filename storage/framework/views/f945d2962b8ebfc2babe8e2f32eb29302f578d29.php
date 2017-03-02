<?php echo $__env->make('components.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('components.company', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<center>
<meta charset="ut-8">
	<form action="<?php echo e(URL::to('company_my_message_pro')); ?>" method="post" enctype="multipart/form-data">
		<table>
			<tr>
				<td>公司名称：</td>
				<td><input type="text" name="companyname"></td>
			</tr>
			<tr>
				<td>所属行业：</td>
				<td><input type="text" name="trade_cn"></td>
			</tr>
			<tr>
				<td>公司规模：</td>
				<td><input type="text" name="scale_cn"></td>
			</tr>
			<tr>
				<td>注册资金：</td>
				<td><input type="text" name="registered"></td>
			</tr>
			<tr>
				<td>所在地区：</td>
				<td><input type="text" name="district_cn"></td>
			</tr>
			<tr>
				<td>所在街道：</td>
				<td><input type="text" name="street_cn"></td>
			</tr>
			<tr>
				<td>联系人：</td>
				<td><input type="text" name="contact"></td>
			</tr>
			<tr>
				<td>联系电话：</td>
				<td><input type="text" name="telephone"></td>
			</tr>
			<tr>
				<td>联系邮箱：</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td>详细地址：</td>
				<td><input type="text" name="address"></td>
			</tr>
			<tr>
				<td>公司简介：</td>
				<td><input type="text" name="contents"></td>
			</tr>
			<tr>
				<td>企业logo</td>
				<td><input type="file" name="logo"></td>
			</tr>
			<tr>
				<td><a href="<?php echo e(URL::to('company')); ?>">返回返回企业中心</a></td>
				<td><input type="submit" value="确认"></td>
			</tr>
		</table>
	</form>
</center>

 <script src="style/js/core.min.js" type="text/javascript"></script>