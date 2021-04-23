 <footer class="footer">
        <div class="container-fluid">
          <div class="copyright float-right">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script> Fatma GÜREL
		
<script src="<?=base_url()?>assets/admin/css/sweetalert2.min.js"></script>

<script>
function formGonder(){
 sweetAlert({
  title: "Are you sure?",
  text: "Once deleted, you will not be able to recover this imaginary file!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    sweetAlert("Poof! Your imaginary file has been deleted!", {
      icon: "success",
    });
  } else {
    sweetAlert("Your imaginary file is safe!");
  }
});
}
</script>

          </div>
        </div>
      </footer>
    </div>
  </div>

</body>

</html>