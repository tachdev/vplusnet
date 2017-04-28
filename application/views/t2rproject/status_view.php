<body class="bg-dark bg-t2r">
    <div class="container">
        <div class="user-container col-lg-8 col-lg-offset-2 t2r-register package">
            <section class="panel" style="text-align:center">
            		<?php if($status == 'login_success'): ?>             		               
                		<h3>คุณได้ทำการลงทะเบียนสำเร็จ<h3>
                		<a href="<?php echo base_url(); ?>t2rproject/user/" class="btn btn-success mg-t-lg">กลับสู่หน้า login</a>
                	<?php endif; ?>
                	<?php if($status == 'have_package'): ?> 
                		<h3>คุณได้สมัคร package เรียบร้อยเเล้ว<h3>
                		<a href="<?php echo base_url(); ?>t2rproject/user/t2rmenu" class="btn btn-success mg-t-lg">กลับสู่ menu</a>
                	<?php endif; ?>
                	<?php if($status == 'not_package'): ?> 
                		<h3>คุณยังไม่ได้ทำการสมัคร package <h3>
                		<a href="<?php echo base_url(); ?>t2rproject/user/t2rmenu" class="btn btn-success mg-t-lg">กลับสู่ menu</a>
                	<?php endif; ?>
                	<?php if($status == 'not_system'): ?>
                		<h3>ระบบนี้ยังไม่เปิดให้บริการ <h3>
                		<a href="<?php echo base_url(); ?>t2rproject/user/t2rmenu" class="btn btn-success mg-t-lg">กลับสู่ menu</a>
                	<?php endif; ?> 
            </section>
        </div>
    </div>
</body>

</html>

    