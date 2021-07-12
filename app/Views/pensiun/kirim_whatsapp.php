<?php

use App\Controllers\Pensiun;
?>
<?= $this->extend('layout\static'); ?>
<?= $this->section('content'); ?>
<table class="body-wrap" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; width: 100%; background-color: #f6f6f6; margin: 0;" bgcolor="#f6f6f6">
    <tr style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
        <td style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0;" valign="top"></td>
        <td class="container" width="600" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; display: block !important; max-width: 600px !important; clear: both !important; margin: 0 auto;" valign="top">
            <div class="content" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; max-width: 600px; display: block; margin: 0 auto; padding: 20px;">
                <table class="main" width="100%" cellpadding="0" cellspacing="0" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; border-radius: 3px; background-color: #fff; margin: 0; border: 1px solid #e9e9e9;" bgcolor="#fff">
                    <tr style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
                        <td class="alert alert-warning" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 16px; vertical-align: top; color: #fff; font-weight: 500; text-align: center; border-radius: 3px 3px 0 0; background-color: #2f353f; margin: 0; padding: 20px;" align="center" bgcolor="#2f353f" valign="top">
                            Kirim pesan kepada <?= $pensiun['nama']; ?>
                        </td>
                    </tr>
                    <tr style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
                        <td class="content-wrap" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 20px;" valign="top">
                            <table width="100%" cellpadding="0" cellspacing="0" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
                                <tr style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
                                    <td class="content-block" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px;" valign="top">
                                        <strong style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">Assalamaualaikum,...</strong>
                                    </td>
                                </tr>
                                <tr style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
                                    <td class="content-block" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px;" valign="top">
                                        Kami ingin mengkonfirmasi kepada anda dengan data sebagai berikut:<br><br>
                                        &emsp;&emsp;Nama = <?= $pensiun['nama']; ?><br>
                                        &emsp;&emsp;Nik = <?= $pensiun['nik']; ?><br>
                                        &emsp;&emsp;Jenis Kelamin = <?= $pensiun['jenis_kelamin']; ?><br>
                                        &emsp;&emsp;Email = <?= $pensiun['email']; ?><br>
                                        &emsp;&emsp;No Wa = <?= $pensiun['nohp']; ?><br>
                                        &emsp;&emsp;Tanggal Lahir = <?= format_tanggal($pensiun['tanggal_lahir']); ?><br>
                                        &emsp;&emsp;Alamat = <?= $pensiun['alamat']; ?><br><br>
                                        Menyatakan bahwa anda telah pensiun dari Dinas Pendidikan, Terima Kasih :)
                                    </td>
                                </tr>
                                <tr style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
                                    <td class="content-block" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px;float:right;" valign="top">
                                        <a href="https://web.whatsapp.com/send?phone='.<?= $pensiun['nohp']; ?>.'&text=
Assalamaualaikum,...%0a
Kami ingin mengkonfirmasi kepada anda dengan data sebagai berikut, %0a
Nama = *<?= $pensiun['nama']; ?>*, %0a
Nik = *<?= $pensiun['nik']; ?>*%0a
Jenis Kelamin = *<?= $pensiun['jenis_kelamin']; ?>*%0a
Email = *<?= $pensiun['email']; ?>*%0a
No Wa = *<?= $pensiun['nohp']; ?>*%0a
Tanggal Lahir = *<?= format_tanggal($pensiun['tanggal_lahir']); ?>*%0a
Alamat = *<?= $pensiun['alamat']; ?>*%0a


Menyatakan bahwa anda telah pensiun dari Dinas Pendidikan, Terima Kasih :)" target="blank" class="btn btn-success">Kirim WhatsApp</a>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </div>
        </td>
        <td style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0;" valign="top"></td>
    </tr>
</table>
<?= $this->endSection(); ?>