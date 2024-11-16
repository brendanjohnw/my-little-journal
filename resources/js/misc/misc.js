
export default function Misc() {
}

Misc.prototype.getCSRF = function () {
    return $('meta[name="csrf-token"]').attr('content');
};