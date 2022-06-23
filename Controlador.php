<?php


class Controlador
{
    private string $descricaoPeso;
    private bool $statusPeso;
    private string $descricaoIdade;
    private bool $statusIdade;
    private string $descricaoTipoSang;
    private bool $statusTipoSang;
    private bool $apta;

    //pega status
    public function pegastatusPeso()
    {
        return $this->statusPeso;
    }

    public function pegastatusIdade()
    {
        return $this->statusIdade;
    }

    public function pegastatusTipoSang()
    {
        return $this->statusTipoSang;
    }

    public function pegaApta()
    {
        return $this->apta;
    }


    //get descricao
    public function pegadescricaoPeso()
    {
        return $this->descricaoPeso;
    }

    public function pegadescricaoIdade()
    {
        return $this->descricaoIdade;
    }

    public function pegadescricaoTipoSang()
    {
        return $this->descricaoTipoSang;
    }

    public function verificaDoador(Pessoa $doador, Pessoa $paciente):bool
    {
        $this->verificaImc($doador);
        $this->verificaIdade($doador);
        $this->verificaTipoSang($doador, $doador->pegaTipoSanguineo());
        if (($this->pegastatusIdade() && $this->pegastatusTipoSang() && $this->pegastatusPeso()) == TRUE) {
            $this->apta = TRUE;
            return TRUE;
        }

        $this->apta = FALSE;
        return FALSE;
    }

    private function verificaTipoSang($doador, $sang): bool
    {
        if (($sang == "A+") || ($sang == "A-")
            || ($sang == "O+") || ($sang == "O-")
        ) {
            $this->descricaoTipoSang = "O tipo sanguíneo é compatível  ";
            $this->statusTipoSang = TRUE;
            return FALSE;
        }

        $this->descricaoTipoSang = "O tipo sanguíneo não é compatível  ";
        $this->statusTipoSang = FAlSE;
        return FALSE;
    }
    private function verificaIdade(Pessoa $doador): bool
    {
        $idade =  $doador->pegaIdade();
        if ($idade < 18) {
            $this->descricaoIdade = "Muito jóvem, tem que ser maior do que 18 anos rapaz";
            $this->statusIdade = false;
            return false;
        }
        $this->descricaoIdade = "Esta com idade apta";
        $this->statusIdade = true;
        return true;
    }

    private function verificaImc(Pessoa $doador): bool
    {
        $peso = $doador->pegaPeso();
        $altura = $doador->pegaAltura();
        $imc = $peso / ($altura * $altura);
       
        if ($imc < 18) {
            $this->descricaoPeso = "Está abaixo do peso";
            $this->statusPeso = FALSE;
            return FALSE;
        }

        if ($imc > 30) {
            $this->descricaoPeso = "Está muito a cima do peso";
            $this->statusPeso = FALSE;
            return FALSE;
        }

        $this->descricaoPeso = "Esta com peso apto";
        $this->statusPeso = TRUE;
        return TRUE;
    }
}
