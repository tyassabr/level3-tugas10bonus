<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Produk extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Produk_model');
    } 

    /*
     * Listing produk
     */
    function index()
    {
        $data['produk'] = $this->Produk_model->get_all_produk();
        
        $data['_view'] = 'produk/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Tambah produk baru
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
                'nama_produk' => $this->input->post('nama_produk'),
				'keterangan' => $this->input->post('keterangan'),
				'harga' => $this->input->post('harga'),
				'jumlah' => $this->input->post('jumlah'),
            );
            
            $produk_id = $this->Produk_model->add_produk($params);
            redirect('produk/index');
        }
        else
        {            
            $data['_view'] = 'produk/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Edit/Update produk
     */
    function edit($nama_produk)
    {   
        $data['produk'] = $this->Produk_model->get_produk($nama_produk);
        
        if(isset($data['produk']['nama_produk']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
                    'nama_produk' => $this->input->post('nama_produk'),
					'keterangan' => $this->input->post('keterangan'),
					'harga' => $this->input->post('harga'),
					'jumlah' => $this->input->post('jumlah'),
                );

                $this->Produk_model->update_produk($nama_produk,$params);            
                redirect('produk/index');
            }
            else
            {
                $data['_view'] = 'produk/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('Produk yang ingin diubah tidak ada.');
    } 

    /*
     * Delete produk
     */
    function remove($nama_produk)
    {
        $produk = $this->Produk_model->get_produk($nama_produk);

        if(isset($produk['nama_produk']))
        {
            $this->Produk_model->delete_produk($nama_produk);
            redirect('produk/index');
        }
        else
            show_error('Produk yang ingin di delete tidak ada.');
    }
    
}
