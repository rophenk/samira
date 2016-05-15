                                                              <ul>
                                                                @forelse ($attachment as $lampiran)
                                                                <li><a href="/attachment-show-outgoing/{{ $lampiran->uuid }}">{{ $lampiran->name }}</a> &nbsp; <a href="/attachment-outgoing-delete/{{ $lampiran->uuid }}"><span class="label label-sm label-danger"> <i class="fa fa-times"></i> Hapus </span></a></li>
                                                                @empty
                                                                @endforelse
                                                              </ul>