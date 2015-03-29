<?php

namespace GSB\ReportBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="GSB\ReportBundle\Repository\RapportvisiteRepository")
 * @ORM\Table(name="rapport_visite")
 * @ORM\HasLifecycleCallbacks()
 */
class Rapportvisite {
    
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $dateRapport;
    
    /**
     * @ORM\Column(type="string")
     */
    protected $bilan;
    
    /**
     * @ORM\Column(type="string")
     */
    protected $motif;
    
    /**
     * @ORM\ManyToOne(targetEntity="Praticien")
     * @ORM\JoinColumn(nullable=true)
     */
    protected $medecin;
    
    /**
     * @ORM\ManyToOne(targetEntity="GSB\UserBundle\Entity\Visiteur")
     * @ORM\JoinColumn(nullable=true)
     */
    protected $visiteur;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set dateRapport
     *
     * @param \DateTime $dateRapport
     * @return Rapportvisite
     */
    public function setDateRapport($dateRapport)
    {
        $this->dateRapport = $dateRapport;

        return $this;
    }

    /**
     * Get dateRapport
     *
     * @return \DateTime 
     */
    public function getDateRapport()
    {
        return $this->dateRapport;
    }

    /**
     * Set bilan
     *
     * @param string $bilan
     * @return Rapportvisite
     */
    public function setBilan($bilan)
    {
        $this->bilan = $bilan;

        return $this;
    }

    /**
     * Get bilan
     *
     * @return string 
     */
    public function getBilan()
    {
        return $this->bilan;
    }

    /**
     * Set motif
     *
     * @param string $motif
     * @return Rapportvisite
     */
    public function setMotif($motif)
    {
        $this->motif = $motif;

        return $this;
    }

    /**
     * Get motif
     *
     * @return string 
     */
    public function getMotif()
    {
        return $this->motif;
    }

    /**
     * Set medecin
     *
     * @param \GSB\ReportBundle\Entity\Praticien $medecin
     * @return Rapportvisite
     */
    public function setMedecin(\GSB\ReportBundle\Entity\Praticien $medecin = null)
    {
        $this->medecin = $medecin;

        return $this;
    }

    /**
     * Get medecin
     *
     * @return \GSB\ReportBundle\Entity\Praticien 
     */
    public function getMedecin()
    {
        return $this->medecin;
    }

    /**
     * Set visiteur
     *
     * @param \GSB\ReportBundle\Entity\Visiteur $visiteur
     * @return Rapportvisite
     */
    public function setVisiteur(\GSB\ReportBundle\Entity\Visiteur $visiteur = null)
    {
        $this->visiteur = $visiteur;

        return $this;
    }

    /**
     * Get visiteur
     *
     * @return \GSB\ReportBundle\Entity\Visiteur 
     */
    public function getVisiteur()
    {
        return $this->visiteur;
    }
}
