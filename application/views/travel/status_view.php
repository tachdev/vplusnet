<body class="bg-dark bg-t2r">
    <?php $this->load->view('travel/element/nav'); ?>
    <div class="container">
        <div class="user-container col-lg-8 col-lg-offset-2 t2r-register package">
            <section class="panel" style="text-align:center;"><br>           		               
                		<?php if(isset($message_success)): ?>
                                <div>
                                <p ><?php echo $message_success ?></p>
                                </div>
                        <?php endif; ?>                        
                		<a href="<?php echo base_url(); ?>customer/user/" class="btn btn-success mg-t-lg">กลับสู่หน้า login</a>
            </section>
        </div>
    </div>
</body>

</html>

    