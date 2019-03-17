<?php
    use thiagoalessio\TesseractOCR\TesseractOCR;
    echo (new TesseractOCR('/german.png'))
        ->run();
?>