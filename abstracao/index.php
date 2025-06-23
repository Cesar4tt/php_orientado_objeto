<?php
class computador
{
    public $placa_mae;
    public $cpu;
    public $ssd;
    public $memoria_ram;
    public $gpu;
    public $fonte;
    public $gabinete;

    public function exibir_atributos()
    {
        return
        "<strong>Placa Mãe:</strong> $this->placa_mae <br>
        <strong>Processador:</strong> $this->cpu <br>
        <strong>Ssd:</strong> $this->ssd <br>
        <strong>Mérmoria ram:</strong> $this->memoria_ram <br>
        <strong>Placa de video:</strong> $this->gpu <br>
        <strong>Fonte:</strong> $this->fonte <br>
        <strong>Gabinete:</strong> $this->gabinete <br>";
    }

    public function alterar_atributos($placa_mae, $cpu, $ssd, $memoria_ram, $gpu, $fonte, $gabinete)
    {
        $this->placa_mae = $placa_mae;
        $this->cpu = $cpu;
        $this->ssd = $ssd;
        $this->memoria_ram = $memoria_ram;
        $this->gpu = $gpu;
        $this->fonte = $fonte;
        $this->gabinete = $gabinete;
    }
}

$pc01 = new computador;
$pc02 = new computador;
$pc03 = new computador;

$pc01 -> alterar_atributos ("Gigabyte B550M AORUS Elite", "AMD Ryzen 5 5600GT", "SSD Kingston NV3 1TB M.2", "16GB (2x8GB) DIMM DDR4 3200Mhz", "Gigabyte AMD Radeon RX 7600 Gaming OC, 8GB", "Fonte SuperFrame", "700W, 80 Plus Bronze", "Montech X3 MESH");
echo $pc01->exibir_atributos();

echo "<br>";

$pc02 -> alterar_atributos ("GIGABYTE A520M K V2", "Intel Core i5-13400F", "SSD 2TB M.2 NVMe Kingston NV3", "32GB (2x16GB) DIMM DDR4 3200Mhz", "ASRock Radeon RX 6600 Challenger D, 8GB", "Fonte Gamemax GS600, 600W, 80 Plus", "Gamdias Argus E4 Elite");
echo $pc02->exibir_atributos();

echo "<br>";

$pc03 -> alterar_atributos ("GIGABYTE B450 GAMING", "Intel Xeon X5670", "SSD Kingston SA400S37 480GB", "16GB (2x8GB) DDR4 ASGARD VALKYRIE 3600Mhz", "Biostar AMD Radeon RX 580 2048SP, 8GB", "Fonte Redragon RGPS 700W, 80 Plus Bronze", "Gabinete Gamer Cooler Master Sneaker X Red");
echo $pc03->exibir_atributos();