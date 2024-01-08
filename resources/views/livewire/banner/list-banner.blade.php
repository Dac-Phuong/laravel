   <div class="card">
       <div class="d-flex justify-content-between w-100">
           <h5 class="card-header">Danh sách banner </h5>
           <button class="btn btn-primary waves-effect waves-light m-4" data-bs-toggle="modal"
               data-bs-target="#kt_modal_add_category"><i class="ti ti-plus mr-3"></i> Tạo mới</button>
       </div>
       <div class="col-md-2 ml-auto mr-3" style="margin-left:auto;margin-right:25px">
           <div class="input-group input-group-merge">
               <span class="input-group-text" id="basic-addon-search31"><i class="ti ti-search"></i></span>
               <input type="text" wire:model.live.debounce.300ms="search" class="form-control"
                   placeholder="Search..." aria-label="Search..." aria-describedby="basic-addon-search31"
                   fdprocessedid="pjzbzc">
           </div>
       </div>
       <div class="table-responsive text-nowrap p-4">
           <table class="table">
               <thead>
                   <tr>
                       <th>STT</th>
                       <th>Tên Banner</th>
                       <th>Ảnh Banner</th>
                       <th>Ngày tạo</th>
                       <th>Thao tác</th>
                   </tr>
               </thead>
               <tbody class="table-border-bottom-0 ">
                   @if (count($list_banner) > 0)
                       @foreach ($list_banner as $i => $item)
                           <tr>
                               <td>{{ ++$i }}</td>
                               <td>{{ $item->name }}</td>
                               <td><img src="{{ asset('storage/uploads/' . $item->image) }}" alt=""
                                        height="50px" style="object-fit: contain"></td>
                               <td>{{ $item->created_at }}</td>
                               <td>
                                   <div class="dropdown">
                                       <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                           data-bs-toggle="dropdown" fdprocessedid="tqjuwk"><i
                                               class="ti ti-dots-vertical"></i></button>
                                       <div class="dropdown-menu">
                                           <button data-kt-action="update_user" data-user-id={{ $item->id }}
                                               data-bs-toggle="modal" data-bs-target="#kt_modal_update_user"
                                               class="dropdown-item"><i class="ti ti-pencil me-1"></i>
                                               Sửa</button>
                                           <button type="submit" class="dropdown-item"
                                               wire:click="delete({{ $item->id }})"><i class="ti ti-trash me-2"></i>
                                               Delete</button>
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
           <div class="mt-3"> {!! $list_banner->links() !!}</div>
       </div>
   </div>
