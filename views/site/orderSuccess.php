<?php
$this->title = 'Bestellung erfolgreich aufgegeben';
?>
<section class="">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="head1" style="margin-top: 100px"><?php echo $this->title; ?></h1>
                <div class="col-md-12 text-center"><span class="glyphicon glyphicon-ok-circle text-center order-success-ico"></span></div>
                <p>Die Bestellung wurde erfolgreich aufgegeben. Unsere Manager werden Sie in Kürze kontaktieren.</p>
                <?php
                if (isset($approvalUrl) && $approvalUrl != '') {
                ?>
                    <script>
                        setTimeout(function(){ window.open("<?php echo $approvalUrl; ?>", "_blank") }, 5000);
                    </script>
                    <p>Sie werden in 5 Sekunden zur Zahlungsseite weitergeleitet (<a href="<?php echo $approvalUrl; ?>" target="_blank"><?php echo $approvalUrl; ?></a>)</p>
                <?php
                }
                ?>

                <a href="/">Zurück nach Hause</a>
            </div>
        </div>
    </div>
</section>
<?php

