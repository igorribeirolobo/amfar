<?php

class arquivo{
    protected $filename = null;
    protected $mode = null;
    
    
    public function setFilename($filename)
    {
        $this->filename = $filename;
    }
    public function setMode($mode)
    {
        $this->mode = $mode;
    }
    public function getFilename()
    {
        return $this->filename;
    }
    public function getMode()
    {
        return $this->mode;
    }
    public function fopen()
    {
        $open = fopen($this->getFilename(), $this->getMode());
        
        return $open;
    }
    public function fwrite($conteudo)
    {
        $write = fwrite($this->fopen(), $conteudo);
        return $write;
    }
    public function fread()
    {
        $read = fread($this->fopen(), filesize($this->getFilename()));
        return $read;
    }
    public function fclose()
    {
        $close = fclose($this->fopen());
        return $close;
    }
    public function execute($atual,$novo,$arquivo)
    {
        $this->setFilename($arquivo);
        $this->setMode("r+");
        $this->fopen();
        $conteudo = $this->fread();
        $tag = "color:".$atual;
        $ntag = "color:".$novo;
        $conteudo = str_replace($tag, $ntag, $conteudo);
        $this->fclose();
        $this->setMode("w");
        $this->fwrite($conteudo);
    }
            
    
}
