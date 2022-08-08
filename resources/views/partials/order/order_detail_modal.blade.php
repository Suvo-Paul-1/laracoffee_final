<!-- Modal -->
<div class="modal fade" id="OrderDetailModal" tabindex="-1" aria-labelledby="OrderDetailModalLabel" aria-hidden="true"
  style="text-transform: capitalize" data-bs-keyboard="false" data-bs-backdrop="static">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="OrderDetailModalLabel">Detail Order</h5>
        <button type="button" class="btn m-0 p-0 d-flex justify-content-center align-items-center"
          data-bs-dismiss="modal" aria-label="Close"><i class="fa fa-fw fa-solid fa-xmark"
            style="color: white;font-size:1.5rem; padding:0"></i></button>
      </div>
      <div class="modal-body detail">
        <div class="row g-0">
          <div class="col-md-8 border-right">
            <div class="status p-3">
              <table class="table table-borderless">
                <tbody>
                  <tr>
                    <td>
                      <div class="d-flex flex-column">
                        <span class="heading d-block">order by</span>
                        <span class="subheadings" id="username_detail">
                          <!-- ordered by -->
                        </span>
                      </div>
                    </td>
                    <td>
                      <div class="d-flex flex-column">
                        <span class="heading d-block">order date</span>
                        <span class="subheadings" id="order_date_detail">
                          <!-- quantity -->
                        </span>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="d-flex flex-column">
                        <span class="heading d-block">quanity</span>
                        <span class="subheadings" id="quantiity_detail">
                          <!-- quantity -->
                        </span>
                      </div>
                    </td>
                    <td>
                      <div class="d-flex flex-column">
                        <span class="heading d-block">address</span>
                        <span class="subheadings" id="address_detail">
                          <!-- address customer -->
                        </span>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="d-flex flex-column">
                        <span class="heading d-block">payment method</span>
                        <span class="subheadings" id="payment_method_detail">
                          <!-- content metode -->
                        </span>
                      </div>
                    </td>
                    <td>
                      <div class="d-flex flex-column">
                        <span class="heading d-block">status</span>
                        <div class="subheadings d-flex justify-content-start align-items-center mt-1">
                          <div id="style_status_detail" style="margin-right: 8px;"></div>
                          <div id="status_detail">
                            <!-- content status -->
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr id="row_bank">
                    <td>
                      <div class="d-flex flex-column">
                        <span class="heading d-block">bank</span>
                        <span class="subheadings" id="bank_detail">
                          <!-- content nama bank -->
                        </span>
                      </div>
                    </td>
                    <td>
                      <div class="d-flex flex-column">
                        <span class="heading d-block">account number</span>
                        <span class="subheadings" style="color:red;" id="account_number_detail">
                          <!-- content no rekening bank -->
                        </span>
                      </div>
                    </td>
                  </tr>

                  <tr>
                    <td id="modal_section_payment_proof">
                      <div class="d-flex flex-column">
                        <span class="heading d-block">payment proof</span>
                        <span class="d-flex flex-row gallery"> <a data-bs-dismiss="modal" data-bs-toggle="modal"
                            href="#DetailBukti" id="link_bukti_transfer"><img id="transaction_doc_detail"
                              src="{{ asset('storage/' .  env(" IMAGE_PROOF")) }}" style="transition:1s;cursor:pointer;"
                              onMouseOver="this.style.width='110px'" onMouseOut="this.style.width='100px'" width="100px"
                              class="rounded" alt="bukti
                            transfer"></a> </span>
                      </div>
                    </td>
                    <td>
                      <div class="heading d-block" id="heading-kuponUsed">coupon</div>
                      <div class="subheadings mb-2" style="text-transform: lowercase;" id="content-kuponUsed">
                        <!-- content kupon -->
                      </div>
                      <div class="heading d-bloc">notes</div>
                      <div class="subheadings" style="text-transform: lowercase;" id="notes_transaction_detail">
                        <!-- content catatan transaksi -->
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="col-md-4">
            <div class="p-2 text-center">
              <div class="Produk">
                <h1 style="font-size: 18px;">Produk</h1>
                <img id="image_product_detail" width="150px">
                <span class="d-block my-2" style="font-size: 14px;" id="nama_produk_detail"></span>
                <div class="d-flex justify-content-center align-items-cetner mb-3">
                  <div>Total Harga: Rp.</div>
                  <div style="margin-left:5px" id="total_price_detail"></div>
                </div>
                <?php if (auth()->user()->id == 2) : ?>
                <a id="link_ubah" title="ubah data pemesanan"><button
                    class="btn btn-outline-dark mb-3">ubah</button></a>
                <a id="link_batalkan" title="batalkan pemesanan"><button id="btn_batalkan_pemesanan"
                    class="btn btn-outline-danger mb-3">batalkan</button></a>
                <em id="message" class="link-danger"></em>
                <?php endif; ?>

                <?php if (auth()->user()->id == 1) : ?>
                <a id="link_tolak" data-bs-dismiss="modal" data-bs-toggle="modal" href="#ModalPenolakan"
                  title="tolak data pemesanan"><button class="btn btn-outline-danger mb-3">ditolak</button></a>
                <a id="link_selesai" title="akhiri data pemesanan"><button
                    class="btn btn-outline-info mb-3">selesai</button></a>
                <a id="link_setujui" title="setujui data pemesanan"><button
                    class="btn btn-outline-success mb-3">setujui</button></a>
                <?php endif; ?>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>