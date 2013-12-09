<?php

class PaybrasDadosLoja {
    private $seller_name;
    private $seller_email;
    private $seller_site;
    private $seller_pass;
    private $seller_tipolojista;
    private $seller_sistema;
    private $seller_categoriaid;
    private $seller_softdescriptor;
    private $seller_atendimentoemail;
    private $seller_atendimentotel;
    private $seller_ddd_atendimentotel;
    private $seller_atendimentotel1;
    private $seller_ddd_atendimentotel1;
    private $seller_atendimentotel2;
    private $seller_ddd_atendimentotel2;
    private $seller_atendimentotel3;
    private $seller_ddd_atendimentotel3;
    private $seller_atendimentotel4;
    private $seller_ddd_atendimentotel4;
    private $seller_atendimentotel5;
    private $seller_ddd_atendimentotel5;
    private $seller_atendimentotel6;
    private $seller_ddd_atendimentotel6;
    private $seller_atendimentotel7;
    private $seller_ddd_atendimentotel7;

    // Inicializa nova instância da classe PaybrasDadosEmpresa
    public function __construct (Array $dados = null) {
        if ($dados) {
            if (isset($dados['seller_name'])) {
                $this->seller_name = $dados['seller_name'];
            }
            if (isset($dados['seller_email'])) {
                $this->seller_email = $dados['seller_email'];
            }
            if (isset($dados['seller_site'])) {
                $this->seller_site = $dados['seller_site'];
            }
            if (isset($dados['seller_pass'])) {
                $this->seller_pass = $dados['seller_pass'];
            }
            if (isset($dados['seller_tipolojista'])) {
                $this->seller_tipolojista = $dados['seller_tipolojista'];
            }
            if (isset($dados['seller_sistema'])) {
                $this->seller_sistema = $dados['seller_sistema'];
            }
            if (isset($dados['seller_categoriaid'])) {
                $this->seller_categoriaid = $dados['seller_categoriaid'];
            }
            if (isset($dados['seller_softdescriptor'])) {
                $this->seller_softdescriptor = $dados['seller_softdescriptor'];
            }
            if (isset($dados['seller_atendimentoemail'])) {
                $this->seller_atendimentoemail = $dados['seller_atendimentoemail'];
            }
            if (isset($dados['seller_atendimentotel'])) {
                $this->seller_atendimentotel = $dados['seller_atendimentotel'];
            }
            if (isset($dados['seller_ddd_atendimentotel'])) {
                $this->seller_ddd_atendimentotel = $dados['seller_ddd_atendimentotel'];
            }
            if (isset($dados['seller_atendimentotel1'])) {
                $this->seller_atendimentotel1 = $dados['seller_atendimentotel1'];
            }
            if (isset($dados['seller_ddd_atendimentotel1'])) {
                $this->seller_ddd_atendimentotel1 = $dados['seller_ddd_atendimentotel1'];
            }
            if (isset($dados['seller_atendimentotel2'])) {
                $this->seller_atendimentotel2 = $dados['seller_atendimentotel2'];
            }
            if (isset($dados['seller_ddd_atendimentotel2'])) {
                $this->seller_ddd_atendimentotel2 = $dados['seller_ddd_atendimentotel2'];
            }
            if (isset($dados['seller_atendimentotel3'])) {
                $this->seller_atendimentotel3 = $dados['seller_atendimentotel3'];
            }
            if (isset($dados['seller_ddd_atendimentotel3'])) {
                $this->seller_ddd_atendimentotel3 = $dados['seller_ddd_atendimentotel3'];
            }
            if (isset($dados['seller_atendimentotel4'])) {
                $this->seller_atendimentotel4 = $dados['seller_atendimentotel4'];
            }
            if (isset($dados['seller_ddd_atendimentotel4'])) {
                $this->seller_ddd_atendimentotel4 = $dados['seller_ddd_atendimentotel4'];
            }
            if (isset($dados['seller_atendimentotel5'])) {
                $this->seller_atendimentotel5 = $dados['seller_atendimentotel5'];
            }
            if (isset($dados['seller_ddd_atendimentotel5'])) {
                $this->seller_ddd_atendimentotel5 = $dados['seller_ddd_atendimentotel5'];
            }
            if (isset($dados['seller_atendimentotel6'])) {
                $this->seller_atendimentotel6 = $dados['seller_atendimentotel6'];
            }
            if (isset($dados['seller_ddd_atendimentotel6'])) {
                $this->seller_ddd_atendimentotel6 = $dados['seller_ddd_atendimentotel6'];
            }
            if (isset($dados['seller_atendimentotel7'])) {
                $this->seller_atendimentotel7 = $dados['seller_atendimentotel7'];
            }
            if (isset($dados['seller_ddd_atendimentotel7'])) {
                $this->seller_ddd_atendimentotel7 = $dados['seller_ddd_atendimentotel7'];
            }
        } else {
            throw new Exception("Dados da loja não setados.");
        }
    }

    public function getName() {
        return !empty($this->seller_name) ? $this->seller_name : null;
    }
    public function setName($seller_name) {
        $this->seller_name = $seller_name;
    }

    public function getEmail() {
        return !empty($this->seller_email) ? $this->seller_email : null;
    }
    public function setEmail($seller_email) {
        $this->seller_email = $seller_email;
    }

    public function getSite() {
        return !empty($this->seller_site) ? $this->seller_site : null;
    }
    public function setSite($seller_site) {
        $this->seller_site = $seller_site;
    }

    public function getPassword() {
        return !empty($this->seller_pass) ? $this->seller_pass : null;
    }
    public function setPassword($seller_pass) {
        $this->seller_pass = $seller_pass;
    }

    public function getTipoLojista() {
        return !empty($this->seller_tipolojista) ? $this->seller_tipolojista : null;
    }
    public function setTipoLojista($seller_tipolojista) {
        $this->seller_tipolojista = $seller_tipolojista;
    }

    public function getSistema() {
        return !empty($this->seller_sistema) ? $this->seller_sistema : null;
    }
    public function setSistema($seller_sistema) {
        $this->seller_sistema = $seller_sistema;
    }

    public function getCategoria() {
        return !empty($this->seller_categoriaid) ? $this->seller_categoriaid : null;
    }
    public function setCategoria($seller_categoriaid) {
        $this->seller_categoriaid = $seller_categoriaid;
    }    

    public function getSoftDescriptor() {
        return !empty($this->seller_softdescriptor) ? $this->seller_softdescriptor : null;
    }
    public function setSoftDescriptor($seller_softdescriptor) {
        $this->seller_softdescriptor = $seller_softdescriptor;
    }

    public function getAtendimentoEmail() {
        return !empty($this->seller_atendimentoemail) ? $this->seller_atendimentoemail : null;
    }
    public function setAtendimentoEmail($seller_atendimentoemail) {
        $this->seller_atendimentoemail = $seller_atendimentoemail;
    }

    public function getAtendimentoTel() {
        return !empty($this->seller_atendimentotel) ? $this->seller_atendimentotel : null;
    }
    public function setAtendimentoTel($seller_atendimentotel) {
        $this->seller_atendimentotel = $seller_atendimentotel;
    }

    public function getAtendimentoDDD() {
        return !empty($this->seller_ddd_atendimentotel) ? $this->seller_ddd_atendimentotel : null;
    }
    public function setAtendimentoDDD($seller_ddd_atendimentotel) {
        $this->seller_ddd_atendimentotel = $seller_ddd_atendimentotel;
    }

    public function getAtendimentoTel1() {
        return !empty($this->seller_atendimentotel1) ? $this->seller_atendimentotel1 : null;
    }
    public function setAtendimentoTel1($seller_atendimentotel1) {
        $this->seller_atendimentotel1 = $seller_atendimentotel1;
    }

    public function getAtendimentoDDD1() {
        return !empty($this->seller_ddd_atendimentotel1) ? $this->seller_ddd_atendimentotel1 : null;
    }
    public function setAtendimentoDDD1($seller_ddd_atendimentotel1) {
        $this->seller_ddd_atendimentotel1 = $seller_ddd_atendimentotel1;
    }

    public function getAtendimentoTel2() {
        return !empty($this->seller_atendimentotel2) ? $this->seller_atendimentotel2 : null;
    }
    public function setAtendimentoTel2($seller_atendimentotel2) {
        $this->seller_atendimentotel2 = $seller_atendimentotel2;
    }

    public function getAtendimentoDDD2() {
        return !empty($this->seller_ddd_atendimentotel2) ? $this->seller_ddd_atendimentotel2 : null;
    }
    public function setAtendimentoDDD2($seller_ddd_atendimentotel2) {
        $this->seller_ddd_atendimentotel2 = $seller_ddd_atendimentotel2;
    }

    public function getAtendimentoTel3() {
        return !empty($this->seller_atendimentotel3) ? $this->seller_atendimentotel3 : null;
    }
    public function setAtendimentoTel3($seller_atendimentotel3) {
        $this->seller_atendimentotel3 = $seller_atendimentotel3;
    }

    public function getAtendimentoDDD3() {
        return !empty($this->seller_ddd_atendimentotel3) ? $this->seller_ddd_atendimentotel3 : null;
    }
    public function setAtendimentoDDD3($seller_ddd_atendimentotel3) {
        $this->seller_ddd_atendimentotel3 = $seller_ddd_atendimentotel3;
    }

    public function getAtendimentoTel4() {
        return !empty($this->seller_atendimentotel4) ? $this->seller_atendimentotel4 : null;
    }
    public function setAtendimentoTel4($seller_atendimentotel4) {
        $this->seller_atendimentotel4 = $seller_atendimentotel4;
    }

    public function getAtendimentoDDD4() {
        return !empty($this->seller_ddd_atendimentotel4) ? $this->seller_ddd_atendimentotel4 : null;
    }
    public function setAtendimentoDDD4($seller_ddd_atendimentotel4) {
        $this->seller_ddd_atendimentotel4 = $seller_ddd_atendimentotel4;
    }

    public function getAtendimentoTel5() {
        return !empty($this->seller_atendimentotel5) ? $this->seller_atendimentotel5 : null;
    }
    public function setAtendimentoTel5($seller_atendimentotel5) {
        $this->seller_atendimentotel5 = $seller_atendimentotel5;
    }

    public function getAtendimentoDDD5() {
        return !empty($this->seller_ddd_atendimentotel5) ? $this->seller_ddd_atendimentotel5 : null;
    }
    public function setAtendimentoDDD5($seller_ddd_atendimentotel5) {
        $this->seller_ddd_atendimentotel5 = $seller_ddd_atendimentotel5;
    }

    public function getAtendimentoTel6() {
        return !empty($this->seller_atendimentotel6) ? $this->seller_atendimentotel6 : null;
    }
    public function setAtendimentoTel6($seller_atendimentotel6) {
        $this->seller_atendimentotel6 = $seller_atendimentotel6;
    }

    public function getAtendimentoDDD6() {
        return !empty($this->seller_ddd_atendimentotel6) ? $this->seller_ddd_atendimentotel6 : null;
    }
    public function setAtendimentoDDD6($seller_ddd_atendimentotel6) {
        $this->seller_ddd_atendimentotel6 = $seller_ddd_atendimentotel6;
    }

    public function getAtendimentoTel7() {
        return !empty($this->seller_atendimentotel7) ? $this->seller_atendimentotel7 : null;
    }
    public function setAtendimentoTel7($seller_atendimentotel7) {
        $this->seller_atendimentotel7 = $seller_atendimentotel7;
    }

    public function getAtendimentoDDD7() {
        return !empty($this->seller_ddd_atendimentotel7) ? $this->seller_ddd_atendimentotel7 : null;
    }
    public function setAtendimentoDDD7($seller_ddd_atendimentotel7) {
        $this->seller_ddd_atendimentotel7 = $seller_ddd_atendimentotel7;
    }

}

?>