<?php

/**
 * Created by PhpStorm.
 * User: Nitesh
 * Date: 10/13/2015
 * Time: 4:10 PM
 */
class Mdl_products extends CI_Model
{


    private $products_id;
    private $products_name;
    private $products_brand_name;
    private $products_manufacturer;
    private $products_substance;
    private $products_size;
    private $products_thickness;
    private $products_grain;
    private $products_sheets_per_packet;
    private $products_packets_per_bundle;
    private $products_quantity_on_offer;
    private $products_packing;
    private $products_rate;
    private $products_cenvat_amount;
    private $sellers_id;

    /**
     * @return mixed
     */
    public function getProductsId()
    {
        return $this->products_id;
    }

    /**
     * @param mixed $products_id
     */
    public function setProductsId($products_id)
    {
        $this->products_id = $products_id;
    }

    /**
     * @return mixed
     */
    public function getProductsName()
    {
        return $this->products_name;
    }

    /**
     * @param mixed $products_name
     */
    public function setProductsName($products_name)
    {
        $this->products_name = $products_name;
    }

    /**
     * @return mixed
     */
    public function getProductsBrandName()
    {
        return $this->products_brand_name;
    }

    /**
     * @param mixed $products_brand_name
     */
    public function setProductsBrandName($products_brand_name)
    {
        $this->products_brand_name = $products_brand_name;
    }

    /**
     * @return mixed
     */
    public function getProductsManufacturer()
    {
        return $this->products_manufacturer;
    }

    /**
     * @param mixed $products_manufacturer
     */
    public function setProductsManufacturer($products_manufacturer)
    {
        $this->products_manufacturer = $products_manufacturer;
    }

    /**
     * @return mixed
     */
    public function getProductsSubstance()
    {
        return $this->products_substance;
    }

    /**
     * @param mixed $products_substance
     */
    public function setProductsSubstance($products_substance)
    {
        $this->products_substance = $products_substance;
    }

    /**
     * @return mixed
     */
    public function getProductsSize()
    {
        return $this->products_size;
    }

    /**
     * @param mixed $products_size
     */
    public function setProductsSize($products_size)
    {
        $this->products_size = $products_size;
    }

    /**
     * @return mixed
     */
    public function getProductsThickness()
    {
        return $this->products_thickness;
    }

    /**
     * @param mixed $products_thickness
     */
    public function setProductsThickness($products_thickness)
    {
        $this->products_thickness = $products_thickness;
    }

    /**
     * @return mixed
     */
    public function getProductsGrain()
    {
        return $this->products_grain;
    }

    /**
     * @param mixed $products_grain
     */
    public function setProductsGrain($products_grain)
    {
        $this->products_grain = $products_grain;
    }

    /**
     * @return mixed
     */
    public function getProductsSheetsPerPacket()
    {
        return $this->products_sheets_per_packet;
    }

    /**
     * @param mixed $products_sheets_per_packet
     */
    public function setProductsSheetsPerPacket($products_sheets_per_packet)
    {
        $this->products_sheets_per_packet = $products_sheets_per_packet;
    }

    /**
     * @return mixed
     */
    public function getProductsPacketsPerBundle()
    {
        return $this->products_packets_per_bundle;
    }

    /**
     * @param mixed $products_packets_per_bundle
     */
    public function setProductsPacketsPerBundle($products_packets_per_bundle)
    {
        $this->products_packets_per_bundle = $products_packets_per_bundle;
    }

    /**
     * @return mixed
     */
    public function getProductsQuantityOnOffer()
    {
        return $this->products_quantity_on_offer;
    }

    /**
     * @param mixed $products_quantity_on_offer
     */
    public function setProductsQuantityOnOffer($products_quantity_on_offer)
    {
        $this->products_quantity_on_offer = $products_quantity_on_offer;
    }

    /**
     * @return mixed
     */
    public function getProductsPacking()
    {
        return $this->products_packing;
    }

    /**
     * @param mixed $products_packing
     */
    public function setProductsPacking($products_packing)
    {
        $this->products_packing = $products_packing;
    }

    /**
     * @return mixed
     */
    public function getProductsRate()
    {
        return $this->products_rate;
    }

    /**
     * @param mixed $products_rate
     */
    public function setProductsRate($products_rate)
    {
        $this->products_rate = $products_rate;
    }

    /**
     * @return mixed
     */
    public function getProductsCenvatAmount()
    {
        return $this->products_cenvat_amount;
    }

    /**
     * @param mixed $products_cenvat_amount
     */
    public function setProductsCenvatAmount($products_cenvat_amount)
    {
        $this->products_cenvat_amount = $products_cenvat_amount;
    }

    /**
     * @return mixed
     */
    public function getSellersId()
    {
        return $this->sellers_id;
    }

    /**
     * @param mixed $sellers_id
     */
    public function setSellersId($sellers_id)
    {
        $this->sellers_id = $sellers_id;
    }



    private function _validate()
    {
        switch (func_get_arg(0)) {
            case "insert":
                $this->setProductsBrandName($this->security->xss_clean($this->products_brand_name));
                $this->setProductsName($this->security->xss_clean($this->products_name));
                $this->setProductsCenvatAmount($this->security->xss_clean($this->products_cenvat_amount));
                $this->setProductsManufacturer($this->security->xss_clean($this->products_manufacturer));
                $this->setProductsGrain($this->security->xss_clean($this->products_grain));
                $this->setProductsPacketsPerBundle($this->security->xss_clean($this->products_packets_per_bundle));
                $this->setProductsPacking($this->security->xss_clean($this->products_packing));
                $this->setProductsQuantityOnOffer($this->security->xss_clean($this->products_quantity_on_offer));
                $this->setProductsRate($this->security->xss_clean($this->products_rate));
                $this->setProductsSheetsPerPacket($this->security->xss_clean($this->products_sheets_per_packet));
                $this->setProductsSize($this->security->xss_clean($this->products_size));
                $this->setProductsSubstance($this->security->xss_clean($this->products_substance));
                $this->setProductsThickness($this->security->xss_clean($this->products_thickness));

                $this->setSellersId($this->security->xss_clean($this->sellers_id));

                break;

            default:
                break;
        }


    }


    public function insertProduct(){

        $this->_validate('insert');

        $data = [
            'chawri_products_name' => $this->products_name,
            'chawri_products_brand_name' => $this->products_brand_name,
            'chawri_products_manufacturer' => $this->products_manufacturer,
            'chawri_products_substance' => $this->products_substance,

            'chawri_products_size' => $this->products_size,
            'chawri_products_thickness' => $this->products_thickness,
            'chawri_products_grain' => $this->products_grain,
            'chawri_products_sheets_per_packet' => $this->products_sheets_per_packet,
            'chawri_products_packets_per_bundle' => $this->products_packets_per_bundle,
            'chawri_products_quantity_on_offer' => $this->products_quantity_on_offer,
            'chawri_products_packing' => $this->products_packing,
            'chawri_products_rate' => $this->products_rate,
            'chawri_products_cenvat_amount' => $this->products_cenvat_amount,
            'chawri_sellers_id' => $this->sellers_id


        ];
        if ($this->db->insert('chawri_products', $data)) {
            return true;
        }
        return false;
    }


    public function setData()
    {
        switch (func_get_arg(0)) {
            case "insert":

                $this->setSellersId(func_get_arg(1));
                $this->setProductsBrandName(func_get_arg(2));
                $this->setProductsName(func_get_arg(3));
                $this->setProductsCenvatAmount(func_get_arg(4));
                $this->setProductsManufacturer(func_get_arg(5));
                $this->setProductsGrain(func_get_arg(6));
                $this->setProductsPacketsPerBundle(func_get_arg(7));
                $this->setProductsPacking(func_get_arg(8));
                $this->setProductsQuantityOnOffer(func_get_arg(9));
                $this->setProductsRate(func_get_arg(10));
                $this->setProductsSheetsPerPacket(func_get_arg(11));
                $this->setProductsSize(func_get_arg(12));
                $this->setProductsSubstance(func_get_arg(13));
                $this->setProductsThickness(func_get_arg(14));



                break;


            default:
                break;
        }

    }


    public function showProducts(){

        $data=$this->db->get('chawri_products')->result_array();
        return $data;
    }

}
