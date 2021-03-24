<?php 
// namespace Triangle;

class Triangle extends Commun {
    
    private int $x1;
    private int $y1;
    private int $x2;
    private int $y2;
    private int $x3;
    private int $y3;
    private string $stroke;
    
    public function __construct(int $x, int $y, string $fill , float $opacity, int $x1, int $y1, int $x2, int $y2, int $x3, int $y3, string $stroke)
    {
        parent::__construct($x, $y, $fill, $opacity, $x1, $y1, $x2, $y2, $x3, $y3, $stroke);
        $this-> x1= $x1;
        $this-> y1= $y1;
        $this-> x2= $x2;
        $this-> y2= $y2;
        $this-> x3= $x3;
        $this-> y3= $y3;
        $this-> stroke = $stroke;
    }
    
    public function getx1(): int
    {
        return $this->x1;
    }
    public function setx1(int $x1): void
    {
        $this->x1 = $x1;
    }
    public function gety1(): int
    {
        return $this->y1;
    }
    public function sety1(int $y1): void
    {
        $this->y1 = $y1;
    }
    
    public function getx2(): int
    {
        return $this->x2;
    }
    public function setx2(int $x2): void
    {
        $this->x2 = $x2;
    }
    public function gety2(): int
    {
        return $this->y2;
    }
    public function sety2(int $y2): void
    {
        $this->y2 = $y2;
    }
   
    public function getx3(): int
    {
        return $this->x3;
    }
    public function setx3(int $x3): void
    {
        $this->x3 = $x3;
    }
    
    public function gety3(): int
    {
        return $this->y3;
    }
    public function sety3(int $y3): void
    {
        $this->y3 = $y3;
    }
    
     public function getstroke(): string
    {
        return $this->stroke;
    }
    public function setstroke(int $stroke): void
    {
        $this->stroke = $stroke;
    }
     public function draw(): string
    {
        return sprintf('<path d="M %s,%s L %s,%s L %s,%s L %s,%s" fill="%s" opacity="%f" stroke="%s"></path>',
            $this->x,
            $this->y,
            $this->x1,
            $this->y1,
            $this->x2,
            $this->y2,
            $this->x3,
            $this->y3,
            $this->fill,
            $this->opacity,
            $this->stroke
        );
    }
}