   <div class="card">
       <div class="d-flex justify-content-between w-100">
           <h5 class="card-header">Danh sách đơn hàng </h5>
       </div>
       <div class="col-md-2 ml-auto mr-3" style="margin-left:auto;margin-right:25px">
           <div class="input-group input-group-merge">
               <span class="input-group-text" id="basic-addon-search31"><i class="ti ti-search"></i></span>
               <input type="text" wire:model.live.debounce.300ms="search" class="form-control" placeholder="Search..."
                   aria-label="Search..." aria-describedby="basic-addon-search31" fdprocessedid="pjzbzc">
           </div>
       </div>
       <div class="table-responsive text-nowrap p-4">
           <table class="table">
               <thead>
                   <tr>
                       <th>STT</th>
                       <th>Người mua</th>
                       <th>Số điện thoại</th>
                       <th>Địa chỉ nhận hàng</th>
                       <th>Tổng tiền hàng</th>
                       <th>Ngày tạo</th>
                       <th>Trạng thái đơn hàng</th>
                       <th>Thao tác</th>
                   </tr>
               </thead>
               <tbody class="table-border-bottom-0 ">
                   @if (count($list_order) > 0)
                       @foreach ($list_order as $i => $item)
                           <tr>
                               <td>{{ ++$i }}</td>
                               <td> {{ $item->name }}</td>
                               <td>{{ $item->phone }}</td>
                               <td>{{ $item->address }}</td>
                               <td>{{ number_format($item->total_price) }}đ</td>
                               <td>{{ $item->created_at }}</td>
                               <td
                                   style="display:flex; width: 100% ; justify-content: space-between;border-top: none;border-left: none;border-right: none">
                                   @if ($item->status == 1)
                                       <button type="submit" wire:click="update_status({{ $item->id }})"
                                           class="btn btn-primary">Xác nhật thanh toán</button>
                                   @elseif($item->status == 2)
                                       <button disabled type="submit" class="btn btn-default">Đơn hàng đã hoàn
                                           thành</button>
                                   @else
                                       <button type="submit" wire:click="update_status({{ $item->id }})" class="btn btn-success">Duyệt đơn hàng</button>
                                   @endif
                               </td>
                               <td>
                                   <div class="dropdown">
                                       <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                           data-bs-toggle="dropdown" fdprocessedid="tqjuwk"><i
                                               class="ti ti-dots-vertical"></i></button>
                                       <div class="dropdown-menu">
                                           <a href="{{ route('order_Detail', $item->id) }}" class="dropdown-item"><i
                                                   class="ti ti-pencil me-1"></i>
                                               Xem chi tiết</a>
                                           @if ($item->status == 0 || $item->status == 1)
                                               <button type="submit" class="dropdown-item"
                                                   wire:click="update_status({{ $item->id }})"><i
                                                       class="ti ti-trash me-2"></i>
                                                   Hủy đơn</button>
                                           @endif
                                       </div>
                                   </div>
                               </td>
                           </tr>
                       @endforeach
                   @else
                       <tr>
                           <td colspan="12" style="text-align:center; color:red">
                               Không có dữ liệu.
                           </td>
                       </tr>
                   @endif
                   </tr>
               </tbody>
           </table>
           <div class="mt-3"> {!! $list_order->links() !!}</div>
       </div>
   </div>
