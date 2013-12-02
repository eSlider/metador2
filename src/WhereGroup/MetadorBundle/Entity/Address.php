<?php
namespace WhereGroup\MetadorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WhereGroup\MetadorBundle\Entity\Address
 *
 * @ORM\Table(name="metador_address")
 * @ORM\Entity
 */
class Address
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $organisationName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $electronicMailAddress;

    /**
     * @ORM\Column(type="string", length=45)
     */
    private $role;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $individualName;

    /**
     * @ORM\Column(type="string", length=45)
     */
    private $country;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $administrativeArea;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $deliveryPoint;

    /**
     * @ORM\Column(type="string", length=45)
     */
    private $city;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $postalCode;

    /**
     * @ORM\Column(type="string", length=45)
     */
    private $voice;

    /**
     * @ORM\Column(type="string", length=45)
     */
    private $facsimile;

    /**
     * @ORM\Column(type="text")
     */
    private $onlineResource;

    public function getId() {
        return $this->id;
    }

    public function getOrganisationName() {
        return $this->organisationName;
    }

    public function getElectronicMailAddress() {
        return $this->electronicMailAddress;
    }

    public function getRole() {
        return $this->role;
    }

    public function getIndividualName() {
        return $this->individualName;
    }

    public function getCountry() {
        return $this->country;
    }

    public function getAdministrativeArea() {
        return $this->administrativeArea;
    }

    public function getDeliveryPoint() {
        return $this->deliveryPoint;
    }

    public function getCity() {
        return $this->city;
    }

    public function getPostalCode() {
        return $this->postalCode;
    }

    public function getVoice() {
        return $this->voice;
    }

    public function getFacsimile() {
        return $this->facsimile;
    }

    public function getOnlineResource() {
        return $this->onlineResource;
    }

    public function setOrganisationName($organisationName) {
        $this->organisationName = $organisationName;
        return $this->organisationName;
    }

    public function setElectronicMailAddress($electronicMailAddress) {
        $this->electronicMailAddress = $electronicMailAddress;
        return $this->electronicMailAddress;
    }

    public function setRole($role) {
        $this->role = $role;
        return $this->role;
    }

    public function setIndividualName($individualName) {
        $this->individualName = $individualName;
        return $this->individualName;
    }

    public function setCountry($country) {
        $this->country = $country;
        return $this->country;
    }

    public function setAdministrativeArea($administrativeArea) {
        $this->administrativeArea = $administrativeArea;
        return $this->administrativeArea;
    }

    public function setDeliveryPoint($deliveryPoint) {
        $this->deliveryPoint = $deliveryPoint;
        return $this->deliveryPoint;
    }

    public function setCity($city) {
        $this->city = $city;
        return $this->city;
    }

    public function setPostalCode($postalCode) {
        $this->postalCode = $postalCode;
        return $this->postalCode;
    }

    public function setVoice($voice) {
        $this->voice = $voice;
        return $this->voice;
    }

    public function setFacsimile($facsimile) {
        $this->facsimile = $facsimile;
        return $this->facsimile;
    }

    public function setOnlineResource($onlineResource) {
        $this->onlineResource = $onlineResource;
        return $this->onlineResource;
    }
}