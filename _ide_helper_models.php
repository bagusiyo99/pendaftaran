<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\About
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $judul
 * @property string $deskripsi
 * @property string $visi
 * @property string $misi
 * @property string $alamat
 * @property string $hp
 * @property string $logo
 * @property string $gambar
 * @method static \Illuminate\Database\Eloquent\Builder|About newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|About newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|About query()
 * @method static \Illuminate\Database\Eloquent\Builder|About whereAlamat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|About whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|About whereDeskripsi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|About whereGambar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|About whereHp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|About whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|About whereJudul($value)
 * @method static \Illuminate\Database\Eloquent\Builder|About whereLogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|About whereMisi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|About whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|About whereVisi($value)
 */
	class About extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Bank
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Bank newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Bank newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Bank query()
 */
	class Bank extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Banner
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $judul
 * @property string $deskripsi
 * @property string $gambar
 * @method static \Database\Factories\BannerFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Banner newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Banner newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Banner query()
 * @method static \Illuminate\Database\Eloquent\Builder|Banner whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Banner whereDeskripsi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Banner whereGambar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Banner whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Banner whereJudul($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Banner whereUpdatedAt($value)
 */
	class Banner extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Blog
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $judul
 * @property string $deskripsi
 * @property string $gambar
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Komen> $komentar
 * @property-read int|null $komentar_count
 * @method static \Database\Factories\BlogFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Blog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Blog newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Blog query()
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereDeskripsi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereGambar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereJudul($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereUpdatedAt($value)
 */
	class Blog extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\DaftarOnline
 *
 * @property int $id
 * @property string $nisn
 * @property string $nik
 * @property string $nama_siswa
 * @property string $jk
 * @property string|null $tempat_lahir
 * @property string|null $tanggal_lahir
 * @property string $gambar
 * @property string $berkas
 * @property string|null $email
 * @property string|null $hp
 * @property string|null $alamat
 * @property string|null $nama_ayah
 * @property string|null $nama_ibu
 * @property string|null $pekerjaan_ayah
 * @property string|null $pekerjaan_ibu
 * @property string|null $pendidikan_ayah
 * @property string|null $pendidikan_ibu
 * @property string|null $nohp_ayah
 * @property string|null $nohp_ibu
 * @property string|null $penghasilan_ayah
 * @property string|null $penghasilan_ibu
 * @property string $file
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|DaftarOnline newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DaftarOnline newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DaftarOnline query()
 * @method static \Illuminate\Database\Eloquent\Builder|DaftarOnline whereAlamat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DaftarOnline whereBerkas($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DaftarOnline whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DaftarOnline whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DaftarOnline whereFile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DaftarOnline whereGambar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DaftarOnline whereHp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DaftarOnline whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DaftarOnline whereJk($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DaftarOnline whereNamaAyah($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DaftarOnline whereNamaIbu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DaftarOnline whereNamaSiswa($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DaftarOnline whereNik($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DaftarOnline whereNisn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DaftarOnline whereNohpAyah($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DaftarOnline whereNohpIbu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DaftarOnline wherePekerjaanAyah($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DaftarOnline wherePekerjaanIbu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DaftarOnline wherePendidikanAyah($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DaftarOnline wherePendidikanIbu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DaftarOnline wherePenghasilanAyah($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DaftarOnline wherePenghasilanIbu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DaftarOnline whereTanggalLahir($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DaftarOnline whereTempatLahir($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DaftarOnline whereUpdatedAt($value)
 */
	class DaftarOnline extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Formulir
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $judul
 * @property string $deskripsi
 * @property string $file
 * @method static \Illuminate\Database\Eloquent\Builder|Formulir newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Formulir newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Formulir query()
 * @method static \Illuminate\Database\Eloquent\Builder|Formulir whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Formulir whereDeskripsi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Formulir whereFile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Formulir whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Formulir whereJudul($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Formulir whereUpdatedAt($value)
 */
	class Formulir extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Foto
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $judul
 * @property string $deskripsi
 * @property string $gambar
 * @method static \Database\Factories\FotoFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Foto newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Foto newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Foto query()
 * @method static \Illuminate\Database\Eloquent\Builder|Foto whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Foto whereDeskripsi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Foto whereGambar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Foto whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Foto whereJudul($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Foto whereUpdatedAt($value)
 */
	class Foto extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Guru
 *
 * @property int $id
 * @property string $judul
 * @property string $deskripsi
 * @property string $gambar
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\GuruFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Guru newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Guru newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Guru query()
 * @method static \Illuminate\Database\Eloquent\Builder|Guru whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Guru whereDeskripsi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Guru whereGambar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Guru whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Guru whereJudul($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Guru whereUpdatedAt($value)
 */
	class Guru extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Informasi
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $judul
 * @property string $deskripsi
 * @property string $gambar
 * @method static \Database\Factories\InformasiFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Informasi newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Informasi newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Informasi query()
 * @method static \Illuminate\Database\Eloquent\Builder|Informasi whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Informasi whereDeskripsi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Informasi whereGambar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Informasi whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Informasi whereJudul($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Informasi whereUpdatedAt($value)
 */
	class Informasi extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Jurusan
 *
 * @property int $id
 * @property string $judul
 * @property string $deskripsi
 * @property string $gambar
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\JurusanFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Jurusan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Jurusan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Jurusan query()
 * @method static \Illuminate\Database\Eloquent\Builder|Jurusan whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Jurusan whereDeskripsi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Jurusan whereGambar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Jurusan whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Jurusan whereJudul($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Jurusan whereUpdatedAt($value)
 */
	class Jurusan extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Kepsek
 *
 * @property int $id
 * @property string $judul
 * @property string $deskripsi
 * @property string $gambar
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\KepsekFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Kepsek newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Kepsek newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Kepsek query()
 * @method static \Illuminate\Database\Eloquent\Builder|Kepsek whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kepsek whereDeskripsi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kepsek whereGambar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kepsek whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kepsek whereJudul($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kepsek whereUpdatedAt($value)
 */
	class Kepsek extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Komen
 *
 * @property int $id
 * @property int $blog_id
 * @property string $nama
 * @property string $isi
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Komen newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Komen newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Komen query()
 * @method static \Illuminate\Database\Eloquent\Builder|Komen whereBlogId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Komen whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Komen whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Komen whereIsi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Komen whereNama($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Komen whereUpdatedAt($value)
 */
	class Komen extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Pendaftaran
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $nama
 * @property string $email
 * @property string $alamat
 * @property string $telpon
 * @property string $jk
 * @property string $gambar
 * @property string $pesan
 * @method static \Database\Factories\PendaftaranFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Pendaftaran newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Pendaftaran newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Pendaftaran query()
 * @method static \Illuminate\Database\Eloquent\Builder|Pendaftaran whereAlamat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pendaftaran whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pendaftaran whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pendaftaran whereGambar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pendaftaran whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pendaftaran whereJk($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pendaftaran whereNama($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pendaftaran wherePesan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pendaftaran whereTelpon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pendaftaran whereUpdatedAt($value)
 */
	class Pendaftaran extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Pesan
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $nama
 * @property string $email
 * @property string $alamat
 * @property string $jk
 * @property string $pesan
 * @method static \Database\Factories\PesanFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Pesan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Pesan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Pesan query()
 * @method static \Illuminate\Database\Eloquent\Builder|Pesan whereAlamat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pesan whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pesan whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pesan whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pesan whereJk($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pesan whereNama($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pesan wherePesan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pesan whereUpdatedAt($value)
 */
	class Pesan extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $akses
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $nohp
 * @property string|null $nohp_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAkses($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereNohp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereNohpVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\cobaa
 *
 * @method static \Illuminate\Database\Eloquent\Builder|cobaa newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|cobaa newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|cobaa query()
 */
	class cobaa extends \Eloquent {}
}

