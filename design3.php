<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            /*padding: 20px;*/
            /*background: #fff;*/
            color: #333;
            background-color: #f4f4f4;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: relative;
        }

        .header .logo {
            flex: 1;
        }

        .header .title {
            flex: 1;
            text-align: center;
        }

        .header .contact-info {
            flex: 1;
            text-align: right;
            font-size: 0.8em;
        }

        .invoice-container {
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border: 1px solid #ddd;
        }

        .header, .table-section {
            margin-bottom: 20px;
        }

        .header .logo {
            font-size: 36px;
            color: #ccc;
        }

        .details div {
            width: 45%;
        }

        .details div p {
            margin: 0;
        }

        .table-section table {
            width: 100%;
            border-collapse: collapse;
            font-size: 10pt;
        }

        .table-section table, .table-section th, .table-section td {
            border: 1px solid #ddd;
        }

        .table-section th, .table-section td {
            padding: 8px;
            text-align: left;
        }

        .table-section th {
            background-color: #f2f2f2;
        }


        .initialDetails table {
            font-size: 10pt;
        }

        .initialDetails table td {
            border: none;
        }

        .initialDetails td:nth-child(1) {
            width: 9%;
        }

        .initialDetails td:nth-child(2) {
            width: 1%;
        }

        .initialDetails td:nth-child(3) {
            width: 70%;
        }

        .initialDetails td:nth-child(4) {
            width: 9%;
        }

        .termsConditions {
            font-size: 7.5pt;
        }

        .signatures table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 10px 0;
            font-size: 9pt;

        }

        .signatures table td {
            border: none;
        }

        .signature-cell {
            text-align: center;
            padding: 20px 10px;
            vertical-align: bottom;
            position: relative;
        }

        .signature-cell::before {
            content: '';
            position: absolute;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 50%;
            border-top: 2px solid black;
        }

        .credits {
            text-align: center;
            font-size: 9pt;
        }
    </style>
</head>
<body>
<div class="invoice-container">
    <div class="header">
        <div class="logo">
            <img src="logo.png" alt="Company Logo">
        </div>
        <div class="title">
            <h1 style="font-size: 14pt">INVOICE</h1>
            <div class="centered-title"><h3 style="font-size: 16pt">Bhusal Cable and Wire Industries Pvt.Ltd</h3></div>
            <p style="text-align: center; font-weight: bold; font-size: 9pt">Amstaiya-4 Balapur, Bhairahawa, Province 5, Nepal</p>
            <p style="text-align: center; font-size: 9pt">Sales Dep: Manigram Nepal</p>
            <p style="text-align: center; font-weight: bold; font-size: 9pt">VAT No: 3021341444</p>
        </div>
        <div class="contact-info">
            <p>Head Office: 071-511072</p>
            <p>Factory: 071-511073</p>
            <p>Sales Dep: 071-511073</p>
        </div>
    </div>

    <div class="table-section">
        <div class="initialDetails">
            <table>
                <thead>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Customer Name</td>
                    <td>:</td>
                    <td>Kalpavriksha Trade Link- Kapilbastu</td>
                    <td>Invoice No</td>
                    <td>:</td>
                    <td>BCWI-1103</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Date</td>
                    <td>:</td>
                    <td>2023-01-01</td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td>:</td>
                    <td>Banganga, Municipality</td>
                    <td>Miti</td>
                    <td>:</td>
                    <td>2023-01-01</td>
                </tr>
                <tr>
                    <td>PAN No</td>
                    <td>:</td>
                    <td>120866562</td>
                    <td>Order No</td>
                    <td>:</td>
                    <td>1153</td>
                </tr>
                <tr>
                    <td>PAN No</td>
                    <td>:</td>
                    <td>120866562</td>
                    <td>Miti</td>
                    <td>:</td>
                    <td>2023-01-01</td>
                </tr>
                <tr>
                    <td>Customer Phone</td>
                    <td>:</td>
                    <td>9702622003</td>
                    <td>Packing Slip No</td>
                    <td>:</td>
                    <td>1,181</td>
                <tr>
                    <td>Delivery Address</td>
                    <td>:</td>
                    <td>Banganga, Municipality</td>
                    <td>Term of Payment</td>
                    <td>:</td>
                    <td>Day's Credit</td>
                </tr>
                <tr>
                    <td colspan="6" style="text-align: center; border: solid 1px #ddd;"><strong>Declaration: We declare
                            that this invoice shows the actual price of the goods described and that all particulars are
                            true and correct.</strong></td>
                </tr>
                </tbody>
            </table>
        </div>

        <table>
            <thead>
            <tr>
                <th>S.N</th>
                <th>Description</th>
                <th>Alt.Qty</th>
                <th>Alt.Unit</th>
                <th>Qty</th>
                <th>Unit</th>
                <th>Rate</th>
                <th>Amount</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>25 (Sq mm) Concentric Cable</td>
                <td>1.00</td>
                <td>BUN</td>
                <td>250.00</td>
                <td>MTR</td>
                <td>72.00</td>
                <td>18,000.00</td>
            </tr>
            <?php
            for ($i = 0; $i < 20; $i++) {
                echo '<tr>
                    <td style="border-top: none; border-bottom: none;"></td>
                    <td style="border-top: none; border-bottom: none;"></td>
                    <td style="border-top: none; border-bottom: none;"></td>
                    <td style="border-top: none; border-bottom: none;"></td>
                    <td style="border-top: none; border-bottom: none;"></td>
                    <td style="border-top: none; border-bottom: none;"></td>
                    <td style="border-top: none; border-bottom: none;"></td>
                    <td style="border-top: none; border-bottom: none;"></td>
                </tr>';
            }
            ?>
            </tbody>
            <tfoot>
            <tr>
                <td colspan="3" style="border-left: none; text-align: left; border-right: none;">
                    <strong>Transporter:</strong> Factory Bolero
                </td>
                <td colspan="3" style="border-left: none;"></td>
                <td style="border-left: none; border-right: none;">SUBTOTAL :</td>
                <td style="border-left: none; border-right: none;">$3125.00</td>
            </tr>
            <tr>
                <td colspan="3" style="border-left: none; text-align: left; border-right: none;"><strong>Vehicle
                        No:</strong> Lu2Cha2730
                </td>
                <td colspan="3" style="border-left: none;"></td>
                <td style="border-left: none; border-right: none;">DISCOUNT :</td>
                <td style="border-left: none; border-right: none;">$0.00</td>
            </tr>
            <tr>
                <td colspan="3" style="border-left: none; border-right: none; text-align: left;"><strong>Driver
                        Name:</strong> Shankar Neupane
                </td>
                <td colspan="3" style="border-left: none; text-align: right;"><strong>Total Kg: </strong> 67.00Kgs</td>
                <td style="border-left: none; border-right: none;">TAXES :</td>
                <td style="border-left: none; border-right: none;">$156.25</td>
            </tr>
            <tr>
                <td colspan="3" style="border-left: none; border-right: none; text-align: left;"><strong>License
                        No:</strong></td>
                <td colspan="3" style="border-left: none; text-align: right;"><strong>Mobile No: </strong> 9801875124
                </td>
                <td style="border-left: none; border-right: none;">VAT (13%) :</td>
                <td style="border-left: none; border-right: none;">$15.70</td>
            </tr>
            <tr>
                <td colspan="6" style="border-left: none;">
                    <table style="border-right: none;border-left: none; border-top: none; border-bottom: none;">
                        <tr>
                            <td style="border-right: none;border-left: none; border-top: none; border-bottom: none;">
                                <strong>Freight:</strong>
                            </td>
                            <td style="border-right: none;border-left: none; border-top: none; border-bottom: none;">
                                <strong>Advance:</strong>
                            </td>
                            <td style="border-right: none;border-left: none; border-top: none; border-bottom: none;">
                                <strong>Balance:</strong>
                            </td>
                        </tr>
                    </table>
                </td>
                <td style="border-left: none; border-right: none;">GRAND TOTAL :</td>
                <td style="border-left: none; border-right: none;">$3281.30</td>
            </tr>
            <tr>
                <td colspan="8" style="border-right: none;border-left: none; text-align: right; font-size: 11pt"> In
                    Words: <strong>Twenty Thousand Three Hundred Forty Only</strong></td>
            </tr>
            <tr>
                <td colspan="8" style="border-right: none;border-left: none; text-align: center; font-size: 11pt;">
                    <strong>Remarks: Confirmed By Santosh Upadhaya</strong></td>
            </tr>
            </tfoot>
        </table>
    </div>

    <div class="termsConditions">
        <strong>Terms & Conditions:</strong>
        <strong><p>1. All Cheque Should be Account Pay Only.</p></strong>
        <strong><p>2. Interest @ 15% per annum will be charges extra if not paid on due date.</p></strong>
        <strong><p>3. The title of the goods is passed on to the customer as soon as the same has been handed over
                to
                the transport.</p></strong>
        <strong><p>4. Received the material in good condition.</p></strong><br><br><br>
    </div>

    <div class="signatures">
        <table>
            <tr>
                <td class="signature-cell">Receipt By</td>
                <td class="signature-cell">Sales Officer</td>
                <td class="signature-cell">Checked By</td>
                <td class="signature-cell">Manager</td>
            </tr>
        </table>
    </div>
    <div class="credits">
        <span>Printed By: Ramesh at <strong>26/02/2024 12:00:00</strong></span>
    </div>
</div>
</body>
</html>

