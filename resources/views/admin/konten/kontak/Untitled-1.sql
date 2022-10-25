SELECT 
    (SELECT COUNT() FROM status WHERE status = 0) / 
    (SELECT COUNT() FROM status) * 100 
    AS persentase_siswa_bekerja;