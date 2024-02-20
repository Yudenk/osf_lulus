<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_Redeem extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Model_admin_redeem','adminredeem');
        $this->load->model('Model_admin_barang');
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->db->order_by('nama_member', 'ASC');
        $data['member'] = $this->db->get('membership')->result_array();
         $data['barangg'] = $this->db->get('barang')->result_array();
         $data['keranjang'] = $this->db->get('keranjang')->result_array();
        $this->load->view("layout/header", $data);
        $this->load->view("admin/vw_admin_redeem", $data);
        $this->load->view("layout/footer", $data);
    }
    // public function detail($id)
    // {
    //     $data['barang'] = $this->Model_admin_barang->getById($id);
    // }

    
    public function update($id)
    {
        // Ambil Keranjangnya
         $keranjang = $this->db->get_where('keranjang', ['id_keranjang' => $id])->row_array();
        $total = $keranjang['total'];
         $jumlah = $keranjang['jumlah'];

        // Masukin kembali stok barang
         $barang = $this->db->get_where('barang', ['id_barang' => $keranjang['id_barang']])->row_array();
         $stok_laa = $barang['stok'];
         $stok = $barang['stok'] + $jumlah;
        $this->db->set('stok', $stok);
        $this->db->where('id_barang', $barang['id_barang']);
        $this->db->update('barang');

        // Masukin kembali point member
        $membership = $this->db->get_where('membership', ['id_member' => $keranjang['id_member']])->row_array();
        $point_lama =  $membership['point'];
         $point = $membership['point'] + $total;
           $this->db->set('point', $point);
        $this->db->where('id_member', $membership['id_member']);
        $this->db->update('membership');

        // Ambil Barang, Jumlah, dan Total Point dari Form Edit 
        $id_barang = $this->input->post('id_barang');
        $barang_post = $this->db->get_where('barang', ['id_barang' => $id_barang])->row_array();
         $jumlah_post = $this->input->post('jumlah');
        $total_post = $barang_post['harga'] * $jumlah_post ;
     
         $id_member = $this->input->post('id_member');
        $member = $this->db->get_where('membership', ['id_member' => $id_member])->row_array();

          if($member['point'] < $total_post) {
            // Karna gagal, stok gagal di kembalikan
             $this->db->set('stok', $barang['stok']);
             $this->db->where('id_barang', $barang['id_barang']);
            $this->db->update('barang');
            // Karna gagal, point gagal di kembalikan
             $this->db->set('point', $point_lama);
             $this->db->where('id_member', $membership['id_member']);
             $this->db->update('membership');
              $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gagal diedit, point kamu terlalu kecil untuk meredem barang tersebut!</div>');
            redirect('Admin_Redeem/index');
        }else if($barang_post['stok']< $jumlah_post){
             // Karna gagal, stok gagal di kembalikan
             $this->db->set('stok', $stok_laa);
             $this->db->where('id_barang', $barang['id_barang']);
            $this->db->update('barang');
            // Karna gagal, point gagal di kembalikan
             $this->db->set('point', $membership['point']);
             $this->db->where('id_member', $membership['id_member']);
             $this->db->update('membership');
             $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gagal diedit, stok barang tidak cukup!</div>');
            redirect('Admin_Redeem/index');
        }else{
             date_default_timezone_set('Asia/Jakarta');

         $point_edit = [
            'point' => $member['point'] - $total_post,
        ];
         $this->db->where('id_member', $id_member);
        $this->db->update('membership', $point_edit);

         $stok_edit = [
            'stok' => $barang_post['stok'] - $jumlah_post,
        ];
         $this->db->where('id_barang', $id_barang);
        $this->db->update('barang', $stok_edit);
         $data = [
            'id_member' => $id_member,
            'id_barang' => $id_barang,
            'total' => $total_post,
            'jumlah' => $jumlah_post,
            'tanggal' => date('Y-m-d')      
        ];
         $this->db->where('id_keranjang', $id);
        $this->db->update('keranjang', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Redeem berhasil diedit</div>');
            redirect('Admin_Redeem');

        }
    }

    public function upload()
    {
        $id_barang = $this->input->post('id_barang');
        $barang = $this->db->get_where('barang', ['id_barang' => $id_barang])->row_array();
        $jumlah = $this->input->post('jumlah');
        $total = $barang['harga'] * $jumlah ;
       
        $id_member = $this->input->post('id_member');
        $member = $this->db->get_where('membership', ['id_member' => $id_member])->row_array();
       
        if($member['point'] < $total) {
              $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Point kamu terlalu kecil untuk meredem barang tersebut!</div>');
            redirect('Admin_Redeem/index');
        }else if($barang['stok']< $jumlah){
             $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Stok barang tidak cukup!</div>');
            redirect('Admin_Redeem/index');
        }
        else{
       
        date_default_timezone_set('Asia/Jakarta');

        $data = [
            'id_member' => $id_member,
            'id_barang' => $id_barang,
            'total' => $total,
            'jumlah' => $jumlah,
            'tanggal' => date('Y-m-d')      
        ];

        $point = [
            'point' => $member['point'] - $total,
        ];
         $this->db->where('id_member', $id_member);
        $this->db->update('membership', $point);

        $stok = [
            'stok' => $barang['stok'] - $jumlah,
        ];
         $this->db->where('id_barang', $id_barang);
        $this->db->update('barang', $stok);
        
        //var_dump($data,$upload_image);exit;
        $this->db->insert('keranjang', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Redeem telah ditambahkan</div>');
            redirect('Admin_Redeem');
            }
    }    

     public function delete($id)
    {
         $keranjang = $this->db->get_where('keranjang', ['id_keranjang' => $id])->row_array();
         $total = $keranjang['total'];
         $jumlah = $keranjang['jumlah'];

         $barang = $this->db->get_where('barang', ['id_barang' => $keranjang['id_barang']])->row_array();
         $stok = $barang['stok'] + $jumlah;
        $this->db->set('stok', $stok);
        $this->db->where('id_barang', $barang['id_barang']);
        $this->db->update('barang');

        $membership = $this->db->get_where('membership', ['id_member' => $keranjang['id_member']])->row_array();
         $point = $membership['point'] + $total;
        $this->db->set('point', $point);
        $this->db->where('id_member', $membership['id_member']);
        $this->db->update('membership');

        $this->db->where('id_keranjang', $id);
        $this->db->delete('keranjang');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Redeem point berhasil dihapus</div>');
            redirect('Admin_Redeem');
    }
}
