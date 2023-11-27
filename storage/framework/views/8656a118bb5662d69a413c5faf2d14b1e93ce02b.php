    <style type="text/css">
            * {margin:0; padding:0; text-indent:0; }
            .s1 { color: black; font-family:Arial, sans-serif; font-style: normal; font-weight: bold; text-decoration: none; font-size: 12pt; }
            .s2 { color: black; font-family:"Microsoft Sans Serif", sans-serif; font-style: normal; font-weight: normal; text-decoration: none; font-size: 8pt; }
            .s3 { color: black; font-family:"Microsoft Sans Serif", sans-serif; font-style: normal; font-weight: normal; text-decoration: none; font-size: 22pt; }
            .s4 { color: #333; font-family:"Microsoft Sans Serif", sans-serif; font-style: normal; font-weight: normal; text-decoration: none; font-size: 8pt; }
            .s5 { color: black; font-family:Arial, sans-serif; font-style: normal; font-weight: bold; text-decoration: none; font-size: 8pt; }
            .s6 { color: #333; font-family:Arial, sans-serif; font-style: normal; font-weight: bold; text-decoration: none; font-size: 8pt; }
            .s7 { color: black; font-family:Arial, sans-serif; font-style: normal; font-weight: bold; text-decoration: none; font-size: 9pt; }
            .s8 { color: black; font-family:Arial, sans-serif; font-style: italic; font-weight: bold; text-decoration: none; font-size: 8pt; }
            .s9 { color: #F00; font-family:"Microsoft Sans Serif", sans-serif; font-style: normal; font-weight: normal; text-decoration: none; font-size: 8pt; }
            .s10 { color: black; font-family:"Microsoft Sans Serif", sans-serif; font-style: normal; font-weight: normal; text-decoration: none; font-size: 8pt; }
            p { color: black; font-family:"Microsoft Sans Serif", sans-serif; font-style: normal; font-weight: normal; text-decoration: none; font-size: 6pt; margin:0pt; }
            li {display: block; }
            #l1 {padding-left: 0pt;counter-reset: c1 1; }
            #l1> li>*:first-child:before {counter-increment: c1; content: counter(c1, decimal)". "; color: black; font-family:"Microsoft Sans Serif", sans-serif; font-style: normal; font-weight: normal; text-decoration: none; font-size: 8pt; }
            #l1> li:first-child>*:first-child:before {counter-increment: c1 0;  }
            table, tbody {vertical-align: top; overflow: visible; }
    </style>
    
    <?php
        $grandTotal = !empty($order->sub_total) ? $order->sub_total : 0 ;
        $installationTotal =  ($order->installation == 1) ? 500 : 0 ;
        $shippingTotal = 1500;
        $totalShipping = $shippingTotal + $installationTotal ;
        $totalExcluding =  $grandTotal - $installationTotal - $shippingTotal;
        $totalExcludingTax =  $totalExcluding/1.18;
        $tax = $totalExcluding - $totalExcludingTax ; 
    ///border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#9E9E9E;
        
       
    ?>
        <!--<h1 style=" color: rgba(62,43,119,0.7); margin-bottom: 20px; text-decoration: underline; display: flex;justify-content: center;align-items: center;">INVOICE </h1>-->

            <h1 style="margin-bottom: 20px;"></h1>

    <table style="border-collapse:collapse; padding:20px;   margin: 0 auto; justify-content: center;align-items: center;" cellspacing="0">
        <tr style="height:70pt">
            <td style="width:90pt;border-top-style:solid;border-top-width:1pt;border-top-color:#9E9E9E;border-left-style:solid;border-left-width:1pt;border-left-color:#9E9E9E;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#9E9E9E" colspan="2">
                <img width="149" height="66" src="https://deskohome.com/public/assets/img/desko_black.png" />

            </td>
            <td style="width:252pt;border-top-style:solid;border-top-width:1pt;border-top-color:#9E9E9E;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#9E9E9E" colspan="3">
                <p class="s1" style="padding-top: 1pt;padding-left: 45pt;text-indent: 0pt;text-align: left;">METADESK PRIVATE LIMITED</p>
                <p class="s2" style="padding-top: 4pt;padding-left: 45pt;padding-right: 52pt;text-indent: 0pt;line-height: 108%;text-align: left;">C/O KH-665-H NO 224-A Allahabad Bank, UttamNagar, Near Inderprasth School, Delhi Delhi 110059</p>
                <p class="s2" style="padding-left: 45pt;text-indent: 0pt;line-height: 9pt;text-align: left;">India</p>
                <p class="s2" style="padding-left: 45pt;text-indent: 0pt;text-align: left;">GSTIN 07AAPCM3690Q1ZI</p>
            </td>
            <td style="width:185pt;border-top-style:solid;border-top-width:1pt;border-top-color:#9E9E9E;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#9E9E9E;border-right-style:solid;border-right-width:1pt;border-right-color:#9E9E9E" colspan="3">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
                <p class="s3" style="padding-left: 48pt;text-indent: 0pt;text-align: left;">TAX INVOICE</p>
            </td>
        </tr>
        <tr style="height:51pt">
            <td style="width:90pt;border-top-style:solid;border-top-width:1pt;border-top-color:#9E9E9E;border-left-style:solid;border-left-width:1pt;border-left-color:#9E9E9E;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#9E9E9E" colspan="2">
                <p class="s4" style="padding-top: 1pt;padding-left: 4pt;text-indent: 0pt;text-align: left;">#</p>
                <p class="s4" style="padding-top: 1pt;padding-left: 4pt;padding-right: 20pt;text-indent: 0pt;line-height: 121%;text-align: left;">Invoice Date Terms</p>
                <p class="s4" style="padding-left: 4pt;text-indent: 0pt;text-align: left;">Due Date</p>
            </td>
            <td style="width:173pt;border-top-style:solid;border-top-width:1pt;border-top-color:#9E9E9E;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#9E9E9E;border-right-style:solid;border-right-width:1pt;border-right-color:#9E9E9E" colspan="2">
                <p class="s5" style="padding-left: 41pt;text-indent: 0pt;text-align: left;">: D84072023</p>
                <p class="s5" style="padding-top: 1pt;padding-left: 41pt;text-indent: 0pt;text-align: left;">: <?php echo e($order->created_at); ?></p>
                <p class="s5" style="padding-top: 1pt;padding-left: 41pt;text-indent: 0pt;text-align: left;">: Due on Receipt</p>
                <p class="s5" style="padding-top: 1pt;padding-left: 41pt;text-indent: 0pt;text-align: left;">: <?php echo e($order->created_at); ?> </p>
            </td>
            <td style="width:79pt;border-top-style:solid;border-top-width:1pt;border-top-color:#9E9E9E;border-left-style:solid;border-left-width:1pt;border-left-color:#9E9E9E;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#9E9E9E">
                <p class="s4" style="padding-top: 1pt;padding-left: 4pt;text-indent: 0pt;text-align: left;">Place Of Supply</p>
            </td>
            <td style="width:185pt;border-top-style:solid;border-top-width:1pt;border-top-color:#9E9E9E;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#9E9E9E;border-right-style:solid;border-right-width:1pt;border-right-color:#9E9E9E" colspan="3">
                <p class="s5" style="padding-left: 52pt;text-indent: 0pt;text-align: left;">: Karnataka (29)</p>
            </td>
        </tr>
        <tr style="height:11pt">
            <td style="width:263pt;border-top-style:solid;border-top-width:1pt;border-top-color:#9E9E9E;border-left-style:solid;border-left-width:1pt;border-left-color:#9E9E9E;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#9E9E9E;border-right-style:solid;border-right-width:1pt;border-right-color:#9E9E9E" colspan="4" bgcolor="#F2F2F3">
                <p class="s6" style="padding-left: 4pt;text-indent: 0pt;line-height: 9pt;text-align: left;">Bill To</p>
            </td>
            <td style="width:264pt;border-top-style:solid;border-top-width:1pt;border-top-color:#9E9E9E;border-left-style:solid;border-left-width:1pt;border-left-color:#9E9E9E;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#9E9E9E;border-right-style:solid;border-right-width:1pt;border-right-color:#9E9E9E" colspan="4" bgcolor="#F2F2F3">
                <p class="s6" style="padding-left: 4pt;text-indent: 0pt;line-height: 9pt;text-align: left;">Ship To</p>
            </td>
        </tr>
        <tr style="height:57pt">
            <td style="width:263pt;border-top-style:solid;border-top-width:1pt;border-top-color:#9E9E9E;border-left-style:solid;border-left-width:1pt;border-left-color:#9E9E9E;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#9E9E9E;border-right-style:solid;border-right-width:1pt;border-right-color:#9E9E9E" colspan="4">
                <p class="s7" style="padding-top: 4pt;padding-left: 4pt;text-indent: 0pt;text-align: left;"><?php echo e(!empty($order->fname) ? ucfirst($order->fname) : ''); ?> <?php echo e(!empty($order->lname) ? ucfirst($order->lname) : ''); ?></p>
                <p class="s2" style="padding-top: 2pt;padding-left: 4pt;text-indent: 0pt;line-height: 124%;text-align: left;"><?php echo e(!empty($order->address) ? ucfirst($order->address) : ''); ?> <?php echo e(!empty($order->state_name) ? ' , '.ucfirst($order->state_name) : ''); ?></p>
                <p class="s2" style="padding-left: 4pt;text-indent: 0pt;text-align: left;"><?php echo e(!empty($order->pincode) ? ucfirst($order->pincode) : ''); ?></p>
            </td>
            <td style="width:264pt;border-top-style:solid;border-top-width:1pt;border-top-color:#9E9E9E;border-left-style:solid;border-left-width:1pt;border-left-color:#9E9E9E;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#9E9E9E;border-right-style:solid;border-right-width:1pt;border-right-color:#9E9E9E" colspan="4">
                <p class="s2" style="padding-top: 5pt;padding-left: 4pt;text-indent: 0pt;line-height: 124%;text-align: left;"><?php echo e(!empty($order->address) ? ucfirst($order->address) : ''); ?> <?php echo e(!empty($order->state_name) ? ' , '.ucfirst($order->state_name) : ''); ?></p>
                <p class="s2" style="padding-left: 4pt;text-indent: 0pt;text-align: left;"><?php echo e(!empty($order->pincode) ? ucfirst($order->pincode) : ''); ?></p>
            </td>
        </tr>
        <tr style="height:15pt">
            <td style="width:27pt;border-top-style:solid;border-top-width:1pt;border-top-color:#9E9E9E;border-left-style:solid;border-left-width:1pt;border-left-color:#9E9E9E;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#9E9E9E;border-right-style:solid;border-right-width:1pt;border-right-color:#9E9E9E" rowspan="2" bgcolor="#F2F2F3">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
                <p class="s5" style="padding-top: 5pt;text-indent: 0pt;text-align: center;">#</p>
            </td>
            <td style="width:147pt;border-top-style:solid;border-top-width:1pt;border-top-color:#9E9E9E;border-left-style:solid;border-left-width:1pt;border-left-color:#9E9E9E;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#9E9E9E;border-right-style:solid;border-right-width:1pt;border-right-color:#9E9E9E" rowspan="2" bgcolor="#F2F2F3">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
                <p class="s5" style="padding-top: 5pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">Item &amp; Description</p>
            </td>
            <td style="width:52pt;border-top-style:solid;border-top-width:1pt;border-top-color:#9E9E9E;border-left-style:solid;border-left-width:1pt;border-left-color:#9E9E9E;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#9E9E9E;border-right-style:solid;border-right-width:1pt;border-right-color:#9E9E9E" rowspan="2" bgcolor="#F2F2F3">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
                <p class="s5" style="padding-top: 5pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">HSN/SAC</p>
            </td>
            <td style="width:58pt;border-top-style:solid;border-top-width:1pt;border-top-color:#9E9E9E;border-left-style:solid;border-left-width:1pt;border-left-color:#9E9E9E;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#9E9E9E;border-right-style:solid;border-right-width:1pt;border-right-color:#9E9E9E" rowspan="2" bgcolor="#F2F2F3">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
                <p class="s5" style="padding-top: 5pt;padding-left: 37pt;text-indent: 0pt;text-align: left;">Qty</p>
            </td>
            <td style="width:58pt;border-top-style:solid;border-top-width:1pt;border-top-color:#9E9E9E;border-left-style:solid;border-left-width:1pt;border-left-color:#9E9E9E;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#9E9E9E;border-right-style:solid;border-right-width:1pt;border-right-color:#9E9E9E" rowspan="2" bgcolor="#F2F2F3">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
                <p class="s5" style="padding-top: 5pt;padding-left: 34pt;text-indent: 0pt;text-align: left;">Rate</p>
            </td>
            <td style="width:116pt;border-top-style:solid;border-top-width:1pt;border-top-color:#9E9E9E;border-left-style:solid;border-left-width:1pt;border-left-color:#9E9E9E;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#9E9E9E;border-right-style:solid;border-right-width:1pt;border-right-color:#9E9E9E" colspan="2" bgcolor="#F2F2F3">
                <p class="s5" style="padding-top: 3pt;padding-left: 47pt;padding-right: 47pt;text-indent: 0pt;text-align: center;">IGST</p>
            </td>
            <td style="width:69pt;border-top-style:solid;border-top-width:1pt;border-top-color:#9E9E9E;border-left-style:solid;border-left-width:1pt;border-left-color:#9E9E9E;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#9E9E9E;border-right-style:solid;border-right-width:1pt;border-right-color:#9E9E9E" rowspan="2" bgcolor="#F2F2F3">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
                <p class="s5" style="padding-top: 5pt;padding-left: 32pt;text-indent: 0pt;text-align: left;">Amount</p>
            </td>
        </tr>
        <tr style="height:11pt">
            <td style="width:58pt;border-top-style:solid;border-top-width:1pt;border-top-color:#9E9E9E;border-left-style:solid;border-left-width:1pt;border-left-color:#9E9E9E;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#9E9E9E;border-right-style:solid;border-right-width:1pt;border-right-color:#9E9E9E" bgcolor="#F2F2F3">
                <p class="s5" style="padding-right: 3pt;text-indent: 0pt;line-height: 9pt;text-align: right;">%</p>
            </td>
            <td style="width:58pt;border-top-style:solid;border-top-width:1pt;border-top-color:#9E9E9E;border-left-style:solid;border-left-width:1pt;border-left-color:#9E9E9E;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#9E9E9E;border-right-style:solid;border-right-width:1pt;border-right-color:#9E9E9E" bgcolor="#F2F2F3">
                <p class="s5" style="padding-right: 3pt;text-indent: 0pt;line-height: 9pt;text-align: right;">Amt</p>
            </td>
        </tr>
        <tr style="height:20pt">
            <td style="width:27pt;border-top-style:solid;border-top-width:1pt;border-top-color:#9E9E9E;border-left-style:solid;border-left-width:1pt;border-left-color:#9E9E9E;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#9E9E9E;border-right-style:solid;border-right-width:1pt;border-right-color:#9E9E9E">
                <p class="s2" style="padding-top: 1pt;text-indent: 0pt;text-align: center;">1</p>
            </td>
            <td style="width:147pt;border-top-style:solid;border-top-width:1pt;border-top-color:#9E9E9E;border-left-style:solid;border-left-width:1pt;border-left-color:#9E9E9E;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#9E9E9E;border-right-style:solid;border-right-width:1pt;border-right-color:#9E9E9E">
                <p class="s2" style="padding-top: 1pt;padding-left: 4pt;text-indent: 0pt;text-align: left;"><?php echo e(!empty($top)? $top : ''); ?></p>
            </td>
            <td style="width:52pt;border-top-style:solid;border-top-width:1pt;border-top-color:#9E9E9E;border-left-style:solid;border-left-width:1pt;border-left-color:#9E9E9E;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#9E9E9E;border-right-style:solid;border-right-width:1pt;border-right-color:#9E9E9E">
                <p class="s2" style="padding-top: 1pt;padding-left: 4pt;text-indent: 0pt;text-align: left;">94033090</p>
            </td>
            <td style="width:58pt;border-top-style:solid;border-top-width:1pt;border-top-color:#9E9E9E;border-left-style:solid;border-left-width:1pt;border-left-color:#9E9E9E;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#9E9E9E;border-right-style:solid;border-right-width:1pt;border-right-color:#9E9E9E">
                <p class="s2" style="padding-top: 1pt;padding-right: 3pt;text-indent: 0pt;text-align: right;">1.00</p>
            </td>
            <td style="width:58pt;border-top-style:solid;border-top-width:1pt;border-top-color:#9E9E9E;border-left-style:solid;border-left-width:1pt;border-left-color:#9E9E9E;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#9E9E9E;border-right-style:solid;border-right-width:1pt;border-right-color:#9E9E9E">
                <p class="s2" style="padding-top: 1pt;padding-left: 18pt;text-indent: 0pt;text-align: left;"> <?php echo e(number_format((float)$totalExcludingTax, 2, '.', '')); ?></p>
            </td>
            <td style="width:58pt;border-top-style:solid;border-top-width:1pt;border-top-color:#9E9E9E;border-left-style:solid;border-left-width:1pt;border-left-color:#9E9E9E;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#9E9E9E;border-right-style:solid;border-right-width:1pt;border-right-color:#9E9E9E">
                <p class="s2" style="padding-top: 1pt;padding-right: 3pt;text-indent: 0pt;text-align: right;">18%</p>
            </td>
            <td style="width:58pt;border-top-style:solid;border-top-width:1pt;border-top-color:#9E9E9E;border-left-style:solid;border-left-width:1pt;border-left-color:#9E9E9E;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#9E9E9E;border-right-style:solid;border-right-width:1pt;border-right-color:#9E9E9E">
                <p class="s2" style="padding-top: 1pt;padding-right: 3pt;text-indent: 0pt;text-align: right;"><?php echo e(number_format((float)$tax, 2, '.', '')); ?></p>
            </td>
            <td style="width:69pt;border-top-style:solid;border-top-width:1pt;border-top-color:#9E9E9E;border-left-style:solid;border-left-width:1pt;border-left-color:#9E9E9E;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#9E9E9E;border-right-style:solid;border-right-width:1pt;border-right-color:#9E9E9E">
                <p class="s2" style="padding-top: 1pt;padding-right: 3pt;text-indent: 0pt;text-align: right;"> <?php echo e(number_format((float)$totalExcludingTax, 2, '.', '')); ?></p>
            </td>
        </tr>
        <tr style="height:39pt">
            <td style="width:297pt;border-top-style:solid;border-top-width:1pt;border-top-color:#9E9E9E;border-left-style:solid;border-left-width:1pt;border-left-color:#9E9E9E;border-right-style:solid;border-right-width:1pt;border-right-color:#9E9E9E" colspan="5">
                <!--<p style="text-indent: 0pt;text-align: left;"><br /></p>-->
                <!--<p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Total In Words</p>-->
                <!--<p class="s8" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Indian Rupee Forty-Three Thousand Five Hundred Only</p>-->
            </td>
            <td style="width:45pt;border-top-style:solid;border-top-width:1pt;border-top-color:#9E9E9E;border-left-style:solid;border-left-width:1pt;border-left-color:#9E9E9E">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
            <td style="width:116pt;border-top-style:solid;border-top-width:1pt;border-top-color:#9E9E9E">
                <p class="s2" style="padding-top: 3pt;padding-left: 27pt;padding-right: 29pt;text-indent: 0pt;line-height: 135%;text-align: left;">Sub Total</p>
                <p class="s2" style="padding-left: 27pt;text-indent: 0pt;text-align: left;">IGST (18%)</p>
                <p class="s2" style="padding-left: 27pt;text-indent: 0pt;text-align: left;">Shipping charge</p>
            </td>
            <td style="width:69pt;border-top-style:solid;border-top-width:1pt;border-top-color:#9E9E9E;border-right-style:solid;border-right-width:1pt;border-right-color:#9E9E9E">
                <p class="s2"  style="padding-top: 3pt;padding-left: 27pt;padding-right: 29pt;text-indent: 0pt;line-height: 135%;text-align: left;" > <?php echo e(number_format((float)$totalExcludingTax, 2, '.', '')); ?></p>
                <p class="s2"  style="padding-left: 31pt;text-indent: 0pt;text-align: left;" ><?php echo e(number_format((float)$tax, 2, '.', '')); ?></p>
                <p class="s2"  style="padding-left: 31pt;text-indent: 0pt;text-align: left;"><?php echo e(number_format((float)$totalShipping, 2, '.', '')); ?></p>
            </td>
        </tr>
        <tr style="height:11pt">
            <td style="width:297pt;border-left-style:solid;border-left-width:1pt;border-left-color:#9E9E9E;border-right-style:solid;border-right-width:1pt;border-right-color:#9E9E9E" colspan="5">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
            <td style="width:45pt;border-left-style:solid;border-left-width:1pt;border-left-color:#9E9E9E">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
            <td style="width:116pt">
                <p class="s5" style="padding-top: 2pt;padding-left: 65pt;text-indent: 0pt;text-align: left;">Total</p>
            </td>
            <td style="width:69pt;border-right-style:solid;border-right-width:1pt;border-right-color:#9E9E9E">
                <p class="s5" style="padding-top: 2pt;padding-right: 5pt;text-indent: 0pt;text-align: right;">Rs. <?php echo e(number_format((float)$grandTotal, 2, '.', '')); ?></p>
            </td>
            
             
        </tr>
        <tr style="height:14pt">
            <td style="width:297pt;border-left-style:solid;border-left-width:1pt;border-left-color:#9E9E9E;border-right-style:solid;border-right-width:1pt;border-right-color:#9E9E9E" colspan="5">
                <p class="s2" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Thanks for your business.</p>
            </td>
            <td style="width:45pt;border-left-style:solid;border-left-width:1pt;border-left-color:#9E9E9E">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
            <td style="width:116pt">
                <p class="s5" style="padding-top: 2pt;padding-left: 65pt;text-indent: 0pt;text-align: left;">Total</p>
            </td>
            <td style="width:69pt;border-right-style:solid;border-right-width:1pt;border-right-color:#9E9E9E">
                <p class="s5" style="padding-top: 2pt;padding-right: 5pt;text-indent: 0pt;text-align: right;">Rs. <?php echo e(number_format((float)$grandTotal, 2, '.', '')); ?></p>
            </td>
        </tr>
        <tr style="height:11pt">
            <td style="width:297pt;border-left-style:solid;border-left-width:1pt;border-left-color:#9E9E9E;border-right-style:solid;border-right-width:1pt;border-right-color:#9E9E9E" colspan="5">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
            <td style="width:45pt;border-left-style:solid;border-left-width:1pt;border-left-color:#9E9E9E">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
            <td style="width:116pt">
                <p class="s2" style="padding-top: 1pt;padding-left: 31pt;text-indent: 0pt;line-height: 8pt;text-align: left;">Payment Made</p>
            </td>
            <td style="width:69pt;border-right-style:solid;border-right-width:1pt;border-right-color:#9E9E9E">
                <p class="s9" style="padding-top: 1pt;padding-right: 5pt;text-indent: 0pt;line-height: 8pt;text-align: right;">(-)  <?php echo e(number_format((float)$grandTotal, 2, '.', '')); ?></p>
            </td>
            
        </tr>
        <tr style="height:17pt">
            
            <td style="width:297pt;border-left-style:solid;border-left-width:1pt;border-left-color:#9E9E9E;border-right-style:solid;border-right-width:1pt;border-right-color:#9E9E9E; border-bottom:solid; border-bottom-width: 1px; border-bottom-color:#9E9E9E; " colspan="5" rowspan="2">
                <p class="s4" style="padding-left: 5pt;text-indent: 0pt;text-align: justify;">Terms &amp; Conditions</p>
                <ol id="l1">
                    <li data-list-text="1.">
                        <p class="s2" style="padding-left: 5pt;padding-right: 28pt;text-indent: 0pt;text-align: justify;">Warranty : Frame &amp; Motor 18 Months, Electronics/Electrical 6 Months , Manufacturing 24 Months</p>
                    </li>
                    <li data-list-text="2.">
                        <p style="padding-left: 5pt;padding-right: 53pt;text-indent: 0pt;text-align: justify;"><a href="mailto:getdesko@gmail.com" class="s10" target="_blank">For Activation of Warranty post delivery , Minimum 3 Images of Assembled Product (Front, Bottom &amp; Side) to be shared on Desko Business Whatsapp number OR getdesko@gmail.com</a></p>
                    </li>
                    <li data-list-text="3.">
                        <p class="s2" style="padding-left: 5pt;padding-right: 55pt;text-indent: 0pt;text-align: justify;">Goods once sold will not be taken back OR exchanged . For any resolutions, kindly contact assigned number on website</p>
                    </li>
                    <li data-list-text="4.">
                        <p class="s2" style="padding-left: 13pt;text-indent: -8pt;line-height: 9pt;text-align: justify;">All disputes are subject to new delhi jurisdiction only.</p>
                    </li>
                    <li data-list-text="5.">
                        <p class="s2" style="padding-left: 13pt;text-indent: -8pt;line-height: 9pt;text-align: justify;">Please Take an Unboxing Video of the Packages. Mandatory to be submitted to Desko,in case of damages observed at the time of delivery for any kind of resolutions thereafter.</p>
                    </li>
                </ol>
            </td>
            <td style="width:45pt;border-left-style:solid;border-left-width:1pt;border-left-color:#9E9E9E;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#9E9E9E">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
            </td>
            <td style="width:116pt;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#9E9E9E">
                <p class="s7" style="padding-top: 3pt;padding-left: 32pt;text-indent: 0pt;text-align: left;">Balance Due</p>
            </td>
            <td style="width:69pt;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#9E9E9E;border-right-style:solid;border-right-width:1pt;border-right-color:#9E9E9E">
                <p class="s7" style="padding-top: 3pt;padding-right: 5pt;text-indent: 0pt;text-align: right;">Rs.0.00</p>
            </td>
            
        </tr>
        <tr style="height:73pt">
            <td style="width:230pt;border-top-style:solid;border-top-width:1pt;border-top-color:#9E9E9E;border-left-style:solid;border-left-width:1pt;border-left-color:#9E9E9E;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#9E9E9E;border-right-style:solid;border-right-width:1pt;border-right-color:#9E9E9E" colspan="3">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
                <p class="s2" style="padding-left: 76pt;text-indent: 0pt;line-height: 8pt;text-align: left;">Authorized Signature</p>
            </td>
        </tr>

    </table><?php /**PATH /home/desko2023/public_html/resources/views/invoice_pdf.blade.php ENDPATH**/ ?>