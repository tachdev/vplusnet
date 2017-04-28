
<body class="bg-t2r">
    <?php $this->load->view('travel/element/nav'); ?>
    <div class="container">
        <div class="user-container col-lg-8 col-lg-offset-2 checkout">
            <section class="panel">                
                <div class="user">
                    <h3 style="text-align:center;">Payment Complete</h3>
                    <p class="bg-success">บริษัทได้รับการชำระเงินเรียบร้อยเเล้ว</p><br>
                    <p><strong>Name</strong> : Teetach Suksamrej</p>
                    <p><strong>Phone Number</strong> : 0863662546</p>
                    <p><strong>Username</strong> : David Navaro</p>
                    <p><strong>Password</strong> : S983330AE</p>
                    <p><strong>Country</strong> : Japan</p>
                    <p><strong>Package</strong> : Smartvoice Travel </p><br>
                    <table class="table no-margin bg-checkout">
                        <thead>
                            <tr>
                                <th class="col-md-3 pd-l-lg">
                                <span class="pd-l-sm"></span>Package</th>
                                <th class="col-md-2">Start Date</th>
                                <th class="col-md-2">End Date</th>
                                <th class="col-md-2" style="text-align:center">โทรได้</th>
                                <th class="col-md-3" style="text-align:center">ราคารวม</th>
                            </tr>
                        </thead>
                        <tbody>
                                <tr>
                                    <td><span class="pd-l-sm">023443453</span></td>
                                    <td><?php echo date("d/m/Y"); ?> </td>
                                    <td>

                                    </td>
                                    <td style="text-align:center" >
                                    </td>
                                    <td style="text-align:center">
                                     
                                    </td>
                                </tr>

                        </tbody>
                    </table>
                    <input type="hidden"  name="comfirm" value="confirm_payment">
                    <br>
                    <div class="goto">
                        <input type="submit" class="jobutton btn btn-primary btn-lg  goto-button" value="User Account">
                    </div>

                </div>
            </section>
        </div>
    </div>
</body>

</html>

    