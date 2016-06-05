<table class="table table-striped table-advance table-hover">
    <thead>
        <tr>
            <th colspan="1">
                <!--<label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                    <input type="checkbox" class="mail-group-checkbox" />
                    <span></span>
                </label>
                <div class="btn-group input-actions">
                    <a class="btn btn-sm blue btn-outline dropdown-toggle sbold" href="javascript:;" data-toggle="dropdown"> Actions
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="javascript:;">
                                <i class="fa fa-pencil"></i> Mark as Read </a>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <i class="fa fa-ban"></i> Spam </a>
                        </li>
                        <li class="divider"> </li>
                        <li>
                            <a href="javascript:;">
                                <i class="fa fa-trash-o"></i> Delete </a>
                        </li>
                    </ul>
                </div>-->
            </th>
            <th class="pagination-control" colspan="3">
                <span class="pagination-info"> 1-30 of 789 </span>
                <a class="btn btn-sm blue btn-outline">
                    <i class="fa fa-angle-left"></i>
                </a>
                <a class="btn btn-sm blue btn-outline">
                    <i class="fa fa-angle-right"></i>
                </a>
                {!! $incoming->links() !!}
            </th>
        </tr>
    </thead>
    <tbody>
        @forelse($incoming as $incoming)
        <?php 
          if($incoming->incoming->attachment_count > 0) {
            $attachment = '<i class="fa fa-paperclip"></i>';
          } else {
            $attachment = '';
          }

          if($incoming->read > 0) {
            $read = '';
          } else {
            $read = 'class="unread"';
          }
        ?>
        <tr <?php echo $read; ?> data-messageid="{{ $incoming->incoming->id }}">
            <!--<td class="inbox-small-cells">
                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                    <input type="checkbox" class="mail-checkbox" value="1" />
                    <span></span>
                </label>
            </td>
            <td class="inbox-small-cells">
                <i class="fa fa-star"></i>
            </td>-->
            <td class="view-message hidden-xs"> {{ $incoming->incoming->sender }}</td>
            <td class="view-message "> {{ $incoming->incoming->subject }} </td>
            <td class="view-message inbox-small-cells">
              <?php echo $attachment; ?>
                
            </td>
            <td class="view-message text-right"> {{ $incoming->dateSend }}</td>
        </tr>
        @empty
        @endforelse
        </tr>-->
    </tbody>
</table>