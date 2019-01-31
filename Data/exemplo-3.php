<?php

// LC_ALL significa: muda toda a configuração que eu tenho para português
setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");

// letras maiúsculas retornam o dia/mês/ano por extenso
echo strftime("%A %B");